<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\website\MainController;

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
    return view('website.layout.app');
});
Route::namespace('website')->group(function(){
    // home
    Route::get('/', 'MainController@home');
    Route::get('/project', 'MainController@project');
    Route::get('/gallery', 'MainController@gallery');
    Route::get('/construction', 'MainController@construction');
    Route::get('/news', 'MainController@news');
    Route::get('/about', 'MainController@about');
    Route::get('/contact', 'MainController@contact');
    Route::get('/career', 'MainController@career');
});

