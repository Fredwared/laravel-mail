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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages/starred', 'MessageController@starred');

Route::get('/messages/trash', 'MessageController@trash');

Route::get('/messages/sent', 'MessageController@sent');

Route::get('/messages/drafts', 'MessageController@drafts');

// Extra routes MUST be above this Route::resource line, or else it won't get read
// You put your most specific routes at the top, and the most general ones at the bottom
Route::resource('/messages', 'MessageController');

