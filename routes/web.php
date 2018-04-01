<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['domain' => 'admin.'.env('MAIN_DOMAIN')], function(){
    Route::get('/', function () { return view('admin.index'); });
});

Route::get('/', function () { return view('user.index'); });
Route::get('index.html', function () { return view('user.index'); });
Route::get('about-us.html', function () { return view('user.about-us'); });
Route::get('blog-single.html', function () { return view('user.blog-single'); });
Route::get('blog.html', function () { return view('user.blog'); });
Route::get('category-course.html', function () { return view('user.category-course'); });
Route::get('contact.html', function () { return view('user.contact'); });
Route::get('course-single.html', function () { return view('user.course-single'); });
Route::get('course.html', function () { return view('user.course'); });
Route::get('data-scientist.html', function () { return view('user.data-scientist'); });
Route::get('detail-serminal.html', function () { return view('user.detail-serminal'); });
Route::get('instructor-single.html', function () { return view('user.instructor-single'); });
Route::get('join-us.html', function () { return view('user.join-us'); });
Route::get('product-category.html', function () { return view('user.product-category'); });
Route::get('product-single.html', function () { return view('user.product-single'); });
Route::get('products.html', function () { return view('user.products'); });
Route::get('research-category.html', function () { return view('user.research-category'); });
Route::get('research-develop-all.html', function () { return view('user.research-develop-all'); });
Route::get('research-single.html', function () { return view('user.research-single'); });
Route::get('seminar.html', function () { return view('user.seminar'); });
