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

Route::get('/', function () { return view('user.index'); });
Route::get('index.html', function () { return view('user.index'); });
Route::get('about-us.html', function () { return view('user.about-us'); });
Route::get('blog-single.html', function () { return view('user.blog-single'); });
Route::get('blog.html', function () { return view('user.blog'); });
Route::get('category-course.html', function () { return view('user.category-course'); });
Route::get('contact.html', function () { return view('user.contact'); });
Route::get('course-single.html', function () { return view('user.course-single'); });
Route::get('course.html', function () { return view('user.course'); });
// Route::get('about-us.html', function () { return view('user.about-us'); });
// Route::get('about-us.html', function () { return view('user.about-us'); });
