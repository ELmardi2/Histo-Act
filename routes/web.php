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
//Route::post('articles/{user_id}/, 'ArticleController@store');

//Route to Histories
Route::resource('histories', 'HistoryController');
//Route to Histories
//Route::resource('posts', 'PostController');

//Auth route
Auth::routes();

//Home route
Route::get('/home', 'HomeController@index')->name('home');

//Route comments page
Route::resource('/comments', 'CommentController');

//Route comments Articles
Route::post('/articles{id}/comments', 'CommentController@addComment');



