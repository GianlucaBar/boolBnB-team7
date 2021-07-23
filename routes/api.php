<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Apartments API
Route::get('/', 'Api\SearchController@index')->name('api.search');

// Extras API
Route::get('/extras', 'Api\ExtrasController@index')->name('api.extras');

//Views API
// Route::middleware(['auth:api'])->group(function () {

//     Route::get('/apartmentIds/{userId}', 'Api\StatsController@getApartments')->name('user-apartments');
//     Route::get('/stats/{apartmentId}', 'Api\StatsController@getStats')->name('stats');

// });

Route::get('/apartmentIds/{userId}', 'Api\StatsController@getApartments')->name('user-apartments');
Route::get('/stats/{apartmentId}', 'Api\StatsController@getStats')->name('stats');


