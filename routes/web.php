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

//Route::get('/', function () {
 //   return view('welcome');
// });
route::get('/home', 'PagesController@home');
route::get('/about', 'PagesController@about');
route::get('/contact', 'PagesController@contact');
route::get('/', 'PagesController@home');

route::get('/portfolio', 'PagesController@portfolio');
route::get('/services', 'PagesController@services');
route::get('/skills', 'PagesController@skills');
route::get('/education', 'PagesController@education');



route::get('/posts', 'PostsController@posts');

Auth::routes(['verify' => true]);



Route::post('/dosend', 'PagesController@dosend');

