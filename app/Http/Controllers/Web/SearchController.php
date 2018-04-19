<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Product;
use App\Models\Event;
use App\Models\DataScientist;
use App\Models\ResearchDevelopment;

class SearchController extends Controller
{
    public function searchAll(Request $request)
    {
        $searchQuery = substr($request->query('q'), 0, 200);

        $results= [
            'courses' => Course::where(fieldLanguage('title'), 'like', '%' . $searchQuery . '%')
                ->with('instructor')
                ->where(fieldLanguage('has'), true)
                ->withCount('comments')
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get(),
            'products' => Product::where(fieldLanguage('title'), 'like', '%' . $searchQuery . '%')
                ->has('category')
                ->with('category')
                ->where(fieldLanguage('has'), true)
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get(),
            'events' => Event::where(fieldLanguage('title'), 'like', '%' . $searchQuery . '%')
                ->with('author')
                ->where(fieldLanguage('has'), true)
                ->take(4)->get(),
            'research_development' => ResearchDevelopment::where(fieldLanguage('title'), 'like', '%' . $searchQuery . '%')
                ->where(fieldLanguage('has'), true)
                ->orderBy('id', 'desc')
                ->take(4)
                ->get(),
            'dataScientists' => DataScientist::where(fieldLanguage('title'), 'like', '%' . $searchQuery . '%')
                ->where(fieldLanguage('has'), true)
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get(),
        ];
        if ($this->checkIsEmptyArr($results)) {
            $results = [];
        }

        return view('user.searchs.search-all', compact('results', 'searchQuery'));
        
    }

    public function checkIsEmptyArr($data)
    {
        $isEmpty = true;
        foreach ($data as $value) {
            if ($value->isNotEmpty()) {
                $isEmpty = false;
            }
        }

        return $isEmpty;
    }
}
