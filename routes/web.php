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

Route::get('/', 'PagesController@Home');
Route::get('/About', 'PagesController@About');
Route::get('/Contact', 'PagesController@Contact');
Route::get('/Work', 'PagesController@Contact');
Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
