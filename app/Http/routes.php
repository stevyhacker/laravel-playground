<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/works', function () {
    return 'route works successfully';
});*/



//Route::get('/', 'PageController@home');

Route::get('/', 'CardsController@index');
Route::get('cards','CardsController@index');

Route::get('/about', 'PageController@about');
