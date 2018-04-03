<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Comment;

class AboutUsController extends AbstractController
{
    public function show($slug)
    {
        $data = AboutUs::where(fieldLanguage('slug'), $slug)->first();
        return view('user.about-us', compact(['data']));
    }
}
