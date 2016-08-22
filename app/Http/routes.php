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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [
  'uses' => 'userController@getLogin',
  'as' => 'login'
]);

Route::post('/login', [
  'uses' => 'userController@postLogin',
  //'as' => 'login'
]);

Route::get('/signup', [
  'uses' => 'userController@getSignup',
  'as' => 'signup'
]);

Route::post('/signup', [
  'uses' => 'userController@postSignup',
  //'as' => 'signup'
]);

Route::get('/profile/{name}', [
  'uses' => 'userController@getProfile',
  'as' => 'profile'
]);

Route::get('/logout', [
  'uses' => 'userController@getLogout',
  'as' => 'logout'
]);

Route::get('/addbook', [
  'uses' => 'bookController@getBookform',
  'as' => 'addbook'
]);

Route::post('/addbook', [
  'uses' => 'bookController@postBook'
]);

Route::get('/booklist', [
  'uses' => 'bookController@getBooklist',
  'as' => 'booklist'
]);

Route::get('/bookdetails/{id}', [
  'uses' => 'bookController@getDetails',
  'as' => 'bookdetails'
]);
