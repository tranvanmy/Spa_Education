<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\JoinUs;
use App\Models\Comment;

class AboutUsController extends AbstractController
{
    public function show($slug)
    {
        $data = AboutUs::where(fieldLanguage('slug'), $slug)->first();

        if (!$data) {
            return redirect()->route('user.not-found');
        }

        return view('user.about-us.detail', compact(['data']));
    }

    public function joinUs($slug)
    {
        $data = JoinUs::where(fieldLanguage('slug'), $slug)->first();

        if (!$data) {
            return redirect()->route('user.not-found');
        }

        return view('user.join-us.detail', compact(['data']));
    }
}
