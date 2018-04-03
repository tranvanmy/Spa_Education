<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\Category;
use App\Models\JoinUs;
use App\Models\Instructor;
use App\Models\ResearchDevelopment;
use App\Models\Event;

class HomeController extends Controller
{
    public function index() {
        $navbarField = [fieldLanguage('title'), fieldLanguage('slug')];
        $data = [
            'about_us' => AboutUs::where(fieldLanguage('has'), true)->get($navbarField),
            'courses' => Course::where(fieldLanguage('has'), true)->withCount('comments')->get(),
            'research_development_categories' => Category::where('type', 'research_development')->get($navbarField),
            'products_categories' => Category::where('type', 'product')->get($navbarField),
            'join_us' => JoinUs::where(fieldLanguage('has'), true)->get($navbarField),
            'instructors' => Instructor::where(fieldLanguage('has'), true)->get(),
            'research_development' => ResearchDevelopment::where(fieldLanguage('has'), true)->get(),
            'events' => Event::with('author')->where(fieldLanguage('has'), true)->get(),
        ];

        // return timeEvent('2018-04-01 08:00:00', '2018-04-01 08:00:00');
        // die;
        // dd($data['events']);
        return view('user.index', compact('data'));
    }
}
