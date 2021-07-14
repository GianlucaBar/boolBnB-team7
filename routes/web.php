<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Laravel Login Routes
Auth::routes();

// Public Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apartments', 'ApartmentController@index')->name('search-page');


// Private

// prefix('admin') adds admin to these routes url
Route::prefix('admin')
// ->namespace('Admin') looks for controllers in admin folder
->namespace('Admin')
// ->name('admin.') gives a name to a route, es admin.index
->name('admin.')
// ->middleware('auth') set middleware on private
->middleware('auth')
// ->group joins here all the route with the previous set properties
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Here all the admin's route with CRUD opertaions
    Route::resource('apartments', 'ApartmentController');
});

