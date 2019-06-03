<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/Request', function (Request $request) {

    return $posts->post();
});
Route::get('posts', 'postsController@posts');

Route::post('/posts/store', 'postsController@store');

Route::get('/posts', 'postsController@read');

Route::get('/posts/{id}', 'postsController@readOne');

Route::post('/posts/{id}', 'postsController@update');

Route::delete('/posts/{id}', 'postsController@destroy');


// Controller-name@method-name
Route::get('/', 'PageController@index'); // localhost:8000/
Route::get('/{id}', 'PageController@index');
Route::post('/save', 'PageController@save');
Route::get('/deleteUser/{id}', 'PageController@deleteUser');
?>