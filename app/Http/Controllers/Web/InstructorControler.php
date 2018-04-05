<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instructor;

class InstructorControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $instructor = Instructor::where(fieldLanguage('slug'), $slug)->with('courses')->first();

        return view('user.instructor-single', compact(['instructor']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructor = Instructor::where(fieldLanguage('slug'), $slug)->with('courses')->first();

        if (!$instructor) {
            return redirect()->route('user.not-found');
        }

        return view('user.instructor-single', compact(['instructor']));
    }
}
