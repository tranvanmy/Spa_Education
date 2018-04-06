<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index() {
       
        $products = Category::with(['products' => function($query) {
            $query->where(fieldLanguage('has'), true);
        }])->where('type', Category::TYPE_PRODUCT)->get();
        
        return view('user.products.products', compact('products'));
    }

    public function show($category, $product) {
        $product = Product::where(fieldLanguage('slug'), $product)->where(fieldLanguage('has'), true)->first();
        if(!$product) {
            return redirect()->route('user.not-found');
        }
        $productsCategory = Category::with(['products' => function($query) use($product) {
            $query->where(fieldLanguage('has'), true)->where('id', '!=', $product->id)->inRandomOrder()->limit(2);
        }])->where('type', Category::TYPE_PRODUCT)->where(fieldLanguage('slug'), $category)->first();

        $productsPopular = Product::where('id', '!=', $product->id)->where(fieldLanguage('has'), true)->orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('user.products.product-detail', compact('product', 'productsCategory', 'productsPopular'));
    }

    public function category($categorySlug)
    {
        $category = Category::where(fieldLanguage('slug'), $categorySlug)->where('type', Category::TYPE_PRODUCT)->first();
        if(!$category) {
            return redirect()->route('user.not-found');
        }
        $products = Product::where('category_id', $category->id)->where(fieldLanguage('has'), true)->paginate(6);
 
        return view('user.products.product-category', compact('products', 'category'));
        
    }
}
