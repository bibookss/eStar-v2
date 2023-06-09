<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers'], function() { 
    Route::group(['prefix' => 'dorms'], function () {
        Route::get('/', 'DormController@index')->name('dorms');
        Route::get('/{dorm}', 'DormController@show')->name('dorm');
        Route::post('/create-dorm', 'DormController@addDorm')->name('add-dorm');

        Route::post('/{dorm}/posts', 'PostController@createPost')->name('add-post');
        Route::patch('/posts/{post}', 'PostController@editPost')->name('edit-post');
        Route::delete('/posts/{post}', 'PostController@deletePost')->name('delete-post');
    });
});
