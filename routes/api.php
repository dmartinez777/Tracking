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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api', /* 'checkRoles' */]], function () {
    Route::post('events/add', 'EventController@add')->middleware('cors');
    Route::post('events/delete/:id', 'EventController@delete')->middleware('cors');
});

/**
 * None Auth API Routes.
 */
Route::group(['middleware' => ['api']], function () {
    Route::get('events/list', 'EventController@all'); //Move me once auth has been setup.
    Route::post('login', 'api\ApiLoginController@login')->name('login');
    Route::post('register', 'api\ApiRegisterController@register');

});


