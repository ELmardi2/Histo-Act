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



//Route home page
Route::get('/', 'PagesController@Home');
//Route about-us page
Route::get('/about', 'PagesController@About');

//Route contact-us page
Route::get('/contact', 'PagesController@Contact');

//Route to Articles
Route::resource('articles', 'ArticleController');

//Route to Histories
Route::resource('histories', 'HistoryController');