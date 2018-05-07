<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subcriber;
use App\Models\Instructor;
use App\Models\ResearchDevelopment;
use App\Models\Event;
use App\Models\DataScientist;
use App\Models\Banner;
use Carbon\Carbon;
use Lang;

class HomeController extends Controller
{
    public function index() {
        $navbarField = [fieldLanguage('title'), fieldLanguage('slug')];
        $data = [
            'courses' => Course::where(fieldLanguage('has'), true)->withCount('comments')->get(),
            'instructors' => Instructor::where(fieldLanguage('has'), true)->get(),
            'research_development' => ResearchDevelopment::where(fieldLanguage('has'), true)
                ->orderBy('id', 'desc')->get(),
            'events' => Event::with('author')->where(fieldLanguage('has'), true)
                ->where('start_at', '>', Carbon::now())->orderBy('start_at', 'asc')
                ->get(),
            'dataScientist' => DataScientist::has('category')->orderBy('created_at', 'desc')->get(),
            'sliders' => Banner::where('position', Banner::POSITION_SLIDER)->get(),
            'partners' => Banner::where('position', Banner::POSITION_PARTNER)->get(),
        ];

        return view('user.home.' . fieldLanguage('index'), compact('data'));
    }

    public function notFound()
    {
        return redirect()->route('user.not-found');
    }

    public function subcribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $registerData = $request->all();
        try {
            $registed = Subcriber::where('email', $registerData['email']);
            if (!$registed) {
                $subcriber = Subcriber::create($registerData);
            } else {
                $registed->update(array_only($registerData, ['phone', 'message', 'name']));
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => Lang::get('messages.Subscribe_failed'),
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => Lang::get('messages.Subscribe_successed'),
        ]);
    }

    public function changeLanguage(Request $request)
    {
        $lang = $request->lang;
        $lang =  in_array($lang, ['vi', 'en']) ? $lang : 'en';
        \Session::put('user-language', $lang);

        return redirect()->back();
    }
}
