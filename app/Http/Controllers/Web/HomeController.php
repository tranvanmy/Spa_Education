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
            'courses' => Course::where(fieldLanguage('has'), true)->withCount('comments')->get(),
            'instructors' => Instructor::where(fieldLanguage('has'), true)->get(),
            'research_development' => ResearchDevelopment::where(fieldLanguage('has'), true)->get(),
            'events' => Event::with('author')->where(fieldLanguage('has'), true)->get(),
        ];

        return view('user.index', compact('data'));
    }
}
