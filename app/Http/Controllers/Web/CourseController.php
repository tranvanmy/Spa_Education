<?php

namespace App\Http\Controllers\Web;

use App\Models\Course;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with('instructor')
            ->where(fieldLanguage('has'), true)
            ->withCount('comments')
            ->paginate(12);

        return view('user.courses.list-all', compact('courses'));
    }

    public function show($slug)
    {
        $course = Course::where(fieldLanguage('slug'), $slug)
            ->where(fieldLanguage('has'), true)
            ->withCount('comments')
            ->with('instructor')
            ->with(['comments' => function($query){
                $query->orderBy('id', 'desc');
            }])
            ->first();

        if (!$course) {
            return redirect()->route('user.not-found');
        }

        $relatedCourses = Course::with('instructor')
            ->where(fieldLanguage('has'), true)
            ->where('id', '<>', $course->id)
            ->withCount('comments')
            ->inRandomOrder()
            ->limit(2)
            ->get();

        return view('user.courses.detail', compact(['course', 'relatedCourses']));
    }
}
