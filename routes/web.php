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

Route::view('/', 'home')->name('home');
Route::get('/analyze_backlinks', 'ResultsController@show')->name('analyze_backlinks')
    ->middleware('verified');
Route::post('/results/get_keywords', 'ResultsController@getKeywords');
Auth::routes(['verify' => true]);


