<?php

namespace App\Http\Controllers\Web;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with('instructor')
            ->where(fieldLanguage('has'), true)
            ->withCount('comments')
            ->paginate(6);

        return view('user.course', compact('courses'));
    }

    public function show($slug)
    {
        $course = Course::where(fieldLanguage('slug'), $slug)
            ->where(fieldLanguage('has'), true)
            ->withCount('comments')
            ->with('instructor', 'comments')
            ->first();

        $relatedCourses = Course::with('instructor')
            ->where(fieldLanguage('has'), true)
            ->withCount('comments')
            ->inRandomOrder()
            ->limit(2)
            ->get();

        return view('user.course-single', compact(['course', 'relatedCourses']));
    }
}
