<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $commentable = Comment::create($request->all())->commentable;
        $comments = $commentable->comments()->orderBy('id', 'desc')->get();

        return view('user.courses.component-comments', compact('comments'));
    }
}
