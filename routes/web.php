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

// Controller-name@method-name
Route::get('/eventsTest', 'EventsTestController@index'); // hiring event listings page
//Route::get('/e/{event_id}', 'EventsTestController@eventInfo')->where('event_id', '([A-Za-z0-9])'); // hiring event page
//Route::get('/e/{event_id}', array(‘as’ => ‘event_id’, ‘users’ =>’EventsTestController@eventInfo’))->where('event_id', '([A-Za-z0-9])'); // hiring event page details
//Route::get('/e/{event_id}', array(‘as’ => ‘event_id’, ‘uses’ => ’EventsTestController@eventInfo’)); // hiring event page details
Route::get('/e/{event_id}', 'EventsTestController@eventInfo')->where('event_id', '([A-Za-z0-9])'); // hiring event page

//real routing
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
