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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/blogs', 'BlogController@index')->name('blogs.all');
Route::get('/blogs/{blogId}', 'BlogController@show')->name('blogs.show');
Route::post('/blogs/create', 'BlogController@store')->name('blogs.store');
Route::put('/blogs/update/{blogId}', 'BlogController@update')->name('blogs.update');
Route::delete('/blogs/delete/{blogId}', 'BlogController@destroy')->name('blogs.destroy');