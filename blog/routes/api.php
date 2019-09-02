<?php

use Illuminate\Http\Request;
use App\Posts;
use App\Person;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/posts', 'PostController@throwError');
// Route::get('/posts/{post}', 'PostController@showPost');
// Route::get('/person/{person}', 'PersonController@showPerson');

Route::apiResource('/posts', 'PostController');
Route::apiResource('/person', 'PersonController');


Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');