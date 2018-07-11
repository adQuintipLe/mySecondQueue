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

Route::get('/queue-delay','FrontSendController@queueDelay');
Route::get('/queue-specify','FrontSendController@queueSpecify');

Route::post('/save','QueueController@basicqueue');
Route::post('/save-delay','QueueController@delayqueue');
Route::post('/save-specify','QueueController@specificqueue');

Route::get('/view','ViewController@index');



