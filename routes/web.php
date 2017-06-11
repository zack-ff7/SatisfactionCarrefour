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

Route::get('/','QuestionnaireControlleur@index');
Route::post('envoi','QuestionnaireControlleur@sendQuestion');

Route::group(array('prefix' => 'admin', 'middleware' => ['auth', 'web']), function () {
Route::get('liste','ResultatsControlleur@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
