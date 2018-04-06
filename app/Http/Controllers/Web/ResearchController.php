<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ResearchDevelopment;

class ResearchController extends Controller
{
    public function listAll()
    {
        $categories = Category::where('type', Category::TYPE_RD)->get();

        foreach ($categories as $key => $category) {
            $category['reseachDevelopments'] = ResearchDevelopment::where('category_id', $category->id)
                ->where(fieldLanguage('has'), true)
                ->orderBy('id', 'desc')->take(5)->get();
                
            $categories[$key] = $category;
        }

        return view('user.research-develop.list-all', compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('type', Category::TYPE_RD)
            ->where(fieldLanguage('slug'), $slug)
            ->first();

        if (!$category) {
            return redirect()->route('user.not-found');
        }

        $researchDevs = ResearchDevelopment::where('category_id', $category->id)->paginate(6);

        return view('user.research-develop.category', compact(['researchDevs', 'category']));
    }

    public function detail($category, $slug)
    {
        $category = Category::where('type', Category::TYPE_RD)
            ->where(fieldLanguage('slug'), $category)
            ->first();

        if (!$category) {
            return redirect()->route('user.not-found');
        }

        $research = ResearchDevelopment::where(fieldLanguage('slug'), $slug)
            ->where('category_id', $category->id)
            ->where(fieldLanguage('has'), true)->first();

        if (!$research) {
            return redirect()->route('user.not-found');
        }

        $researchRelated = ResearchDevelopment::where('category_id', $category->id)
            ->where('id', '<>', $research->id)
            ->orderBy('id', 'desc')->take(2)->get();

        $researchLastest = ResearchDevelopment::with('category')
            ->where('id', '<>', $research->id)
            ->where(fieldLanguage('has'), true)
            ->orderBy('id', 'desc')->take(4)->get();

        return view('user.research-develop.detail', compact('research', 'category', 'researchRelated', 'researchLastest'));
    }
}
