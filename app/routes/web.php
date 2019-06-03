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

Route::get('/firebase','FirebaseController@index');


Route::get('posts', function (){
    return view('posts');
});


Route::get('home', function (){
    return view('home');
});

Route::get('contact', function (){
    return view('contact');
});

Route::get('users', 'HomeController@users');





Route::get('/', 'PageController@index'); 
Route::get('/{id}', 'PageController@index');
Route::post('/save', 'PageController@save');
Route::get('/deleteUser/{id}', 'PageController@deleteUser');

Route::get('/index', function (){
    return view('index');
});