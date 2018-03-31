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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'BookmarksController@index');
Route::post('/add', ['as' => 'bookmark.add', 'uses' => 'BookmarksController@addBookmark']);
Route::delete('/bookmarks/{id}', 'BookmarksController@destroy');