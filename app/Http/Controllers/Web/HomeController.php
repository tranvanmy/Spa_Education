<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\ResearchDevelopment;
use App\Models\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
        $navbarField = [fieldLanguage('title'), fieldLanguage('slug')];
        $data = [
            'courses' => Course::where(fieldLanguage('has'), true)->withCount('comments')->take(6)->get(),
            'instructors' => Instructor::where(fieldLanguage('has'), true)->get(),
            'research_development' => ResearchDevelopment::where(fieldLanguage('has'), true)
                ->orderBy('id', 'desc')->take(6)->get(),
            'events' => Event::with('author')->where(fieldLanguage('has'), true)
                ->where('start_at', '>', Carbon::now())->orderBy('start_at', 'asc')
                ->take(4)->get(),
        ];

        return view('user.index', compact('data'));
    }

    public function subcribe(Request $request)
    {
        $request->validate([
            'email' => 'email|required|max:255',
        ]);
    }

    public function changeLanguage()
    {
        $language = \Session::get('user-language');
        
        if ($language == 'en') {
            \Session::put('user-language', 'vi');

            return redirect()->back();
        }

        \Session::put('user-language', 'en');

        return redirect()->back();
    }
}
