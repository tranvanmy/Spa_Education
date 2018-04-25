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
    Route::any('{any}', function(){
        return view('admin.index');
    })->where('any', '.*');
});

Route::group(['namespace' => 'Web', 'middleware' => 'locale'], function () {
    Route::get('/', 'HomeController@index' )->name('user.home');
    Route::get('not-found', 'HomeController@index' )->name('user.not-found');
    Route::get('change-language', 'HomeController@changeLanguage' )->name('user.change-language');
    Route::post('subcribe', 'HomeController@subcribe')->name('user.subcribe');

    Route::post('comments/store', 'CommentController@store')->name('user.comment.store');

    Route::get('event', 'EventController@index' )->name('user.event.list');
    Route::get('event/{slug}', 'EventController@show' )->name('user.event.detail');

    Route::get('about-us/{slug}', 'AboutUsController@show')->name('user.about-us.detail');
    Route::get('join-us/{slug}', 'AboutUsController@joinUs')->name('user.join-us.detail');

    Route::get('course', 'CourseController@index')->name('user.courses');
    Route::get('course/{slug}', 'CourseController@show')->name('user.course.detail');

    Route::get('product', 'ProductController@index')->name('user.product.list');
    Route::get('product/{category}', 'ProductController@category')
        ->name('user.product.category');
    Route::get('product/{category}/{product}', 'ProductController@show')
        ->name('user.product.detail');

    Route::get('research-and-development', 'ResearchController@listAll')
        ->name('user.research.list');
    Route::get('research-and-development/{category}', 'ResearchController@category')
        ->name('user.research.category');
    Route::get('research-and-development/{category}/{slug}', 'ResearchController@detail')
        ->name('user.research.detail');

    Route::get('data-scientists-corner', 'DataScientistControler@listAll')
        ->name('user.data-scientist.list');
    Route::get('data-scientists-corner/{category}', 'DataScientistControler@category')
        ->name('user.data-scientist.category');
    Route::get('data-scientists-corner/{category}/{slug}', 'DataScientistControler@detail')
        ->name('user.data-scientist.detail');

    Route::get('instructor', 'InstructorControler@index')->name('user.instructor');
    Route::get('instructor/{slug}', 'InstructorControler@show')
        ->name('user.instructor.detail');

    Route::get('search', 'SearchController@searchAll')
        ->name('user.search.all');

    Route::any('{any}', 'HomeController@notFound')->where('any', '.*');
});
