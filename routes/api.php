<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['domain' => env('DOMAIN_ADMIN'), 'namespace' => 'Api\Admin', 'prefix' => 'v0'], function() {
    Route::middleware('jwt.auth')->get('user', function (Request $request) {
        return $request->user();
    });

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
});
