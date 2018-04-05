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
Route::group(['domain' => 'admin.'. env('MAIN_DOMAIN')], function(){
    Route::any('{any}', function () { return view('admin.index'); })->where('any', '.*');
});

Route::group(['namespace' => 'Web', 'middleware' => 'locale'], function () {
    Route::get('/', 'HomeController@index' )->name('user.home');
    Route::get('not-found', 'HomeController@index' )->name('user.not-found');
    Route::get('change-language', 'HomeController@changeLanguage' )->name('user.change-language');
    // Route::get('search', '')->name('user.search');
    //
    Route::post('subcribe', 'HomeController@subcribe')->name('user.subcribe');
    //
    Route::get('event', 'EventController@index' )->name('user.event.list');
    Route::get('event/{slug}', 'EventController@show' )->name('user.event.detail');
    //
    Route::get('about-us/{slug}', 'AboutUsController@show')->name('user.about-us.detail');
    Route::get('join-us/{slug}', 'IoinUsController@show')->name('user.join-us.detail');
    // Route::get('join-us/{slug}', '')->name('user.join-us.detail');
    //
    Route::get('course', 'CourseController@index')->name('user.courses');
    Route::get('course/{slug}', 'CourseController@show')->name('user.course.detail');
    //
    // Route::get('instructor', '')->name('user.instructor');
    // Route::get('instructor/{slug}', '')->name('user.instructor.detail');
    //
    Route::get('product', 'ProductControler@index')->name('user.product.list');
    Route::get('product/{category}', 'ProductControler@category')->name('user.product.category');
    // Route::get('product/{category}/{product}', 'ProductControler')->name('user.product.detail');
    //
    Route::get('research-and-development', 'ResearchControler@index')->name('user.research.list');
    Route::get('research-and-development/{category}', 'ResearchControler@category')->name('user.research.category');
    // Route::get('research-and-development/{category}/{slug}', 'ResearchControler')->name('user.research.detail');
    //
    Route::get('data-scientists-corner', 'DataScientistControler@index')->name('user.data-scientist.list');
    // Route::get('data-scientists-corner/{category}', 'DataScientistControler')->name('user.data-scientist.category');
    Route::get('data-scientists-corner/{category}/{slug}', 'DataScientistControler@show')->name('user.data-scientist.detail');

    //instructor
    Route::get('instructor/{slug}', 'InstructorControler@index')->name('user.instructor.detail');
});

Route::get('index.html', function () { return view('user.index'); });
Route::get('about-us.html', function () { return view('user.about-us'); });
Route::get('blog-single.html', function () { return view('user.blog-single'); });
Route::get('blog.html', function () { return view('user.blog'); });
// Route::get('category-course.html', function () { return view('user.category-course'); });
Route::get('contact.html', function () { return view('user.contact'); });
Route::get('data-scientist.html', function () { return view('user.data-scientist'); });

Route::get('detail-serminal.html', function () { return view('user.detail-serminal'); });
Route::get('detail-serminaldemo.html', function () { return view('user.detail-serminaldemo'); });

Route::get('instructor-single.html', function () { return view('user.instructor-single'); });
Route::get('join-us.html', function () { return view('user.join-us'); });
Route::get('product-category.html', function () { return view('user.product-category'); });
Route::get('product-single.html', function () { return view('user.product-single'); });
Route::get('products.html', function () { return view('user.products'); });
Route::get('research-category.html', function () { return view('user.research-category'); });
Route::get('research-develop-all.html', function () { return view('user.research-develop-all'); });
Route::get('research-single.html', function () { return view('user.research-single'); });
Route::get('seminar.html', function () { return view('user.seminar'); });
