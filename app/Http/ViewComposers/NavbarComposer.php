<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\Category;
use App\Models\JoinUs;
use App\Models\Instructor;
use App\Models\ResearchDevelopment;
use App\Models\Event;

class NavbarComposer
{
    protected $navbar;
  
    public function __construct(
        AboutUs $aboutUs,
        Course $course,
        Category $category,
        JoinUs $joinUs
    ) {
        $navbarField = [fieldLanguage('title'), fieldLanguage('slug')];
        $this->navbar = [
            'about_us' => $aboutUs->where(fieldLanguage('has'), true)->get($navbarField),
            'courses' => $course->where(fieldLanguage('has'), true)->withCount('comments')->get(),
            'research_development_categories' => $category->where('type', Category::TYPE_RD)->get($navbarField),
            'products_categories' => $category->where('type', Category::TYPE_RD)->get($navbarField),
            'join_us' => $joinUs->where(fieldLanguage('has'), true)->get($navbarField),
        ];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('navbar', $this->navbar);
    }
}