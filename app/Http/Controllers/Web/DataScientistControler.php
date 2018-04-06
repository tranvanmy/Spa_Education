<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\DataScientist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataScientistControler extends Controller
{
    public function listAll()
    {
        $categories = Category::where('type', Category::TYPE_DATA_SCIENTIST)->get();
        $posts = DataScientist::has('author')->has('category')->with('category', 'author')->orderBy('id', 'desc')->paginate(10);

        return view('user.data-scientist.list-all', compact(['categories', 'posts']));
    }

    public function category($category)
    {
        $categories = Category::where('type', Category::TYPE_DATA_SCIENTIST)->get();
        $category = Category::where('type', Category::TYPE_DATA_SCIENTIST)
            ->where(fieldLanguage('slug'), $category)->first();

        if(!$category) {
            return redirect()->route('user.not-found');
        }

        $posts = DataScientist::with('category', 'author')
            ->where('category_id', $category->id)
            ->orderBy('id', 'desc')->paginate(10);

        return view('user.data-scientist.category', compact(['categories', 'category', 'posts']));
    }

    public function detail($category, $slug)
    {
        $category = Category::where('type', Category::TYPE_DATA_SCIENTIST)
            ->where(fieldLanguage('slug'), $category)->first();

        if(!$category) {
            return redirect()->route('user.not-found');
        }

        $post = DataScientist::with('author')
            ->where('category_id', $category->id)
            ->where(fieldLanguage('slug'), $slug)->first();

        if(!$post) {
            return redirect()->route('user.not-found');
        }
        $post->viewed += 1;
        $post->save();

        $postRelate = DataScientist::with('author')
            ->where('category_id', $category->id)
            ->where('id', '<>', $post->id)
            ->inRandomOrder()->take(2)->get();

        $postLastest = DataScientist::with('category')
            ->where('id', '<>', $post->id)
            ->orderBy('id', 'desc')->take(4)->get();

        return view('user.data-scientist.detail', compact([
            'postLastest', 'postRelate', 'category', 'post',
        ]));
    }
}
