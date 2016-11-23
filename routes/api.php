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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('signin', 'AuthenticateController@authenticate');
Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
Route::post('getVolumebydBr','SoundController@getVolumebydBr');
Route::post('signup','SoundController@signup');

Route::post('sound','SoundController@index');

Route::group(['middleware' => 'app'], function() {

});
