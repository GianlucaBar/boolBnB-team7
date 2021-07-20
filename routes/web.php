<?php

use Illuminate\Support\Facades\Route;

// Laravel Login Routes
Auth::routes();

// PUBLIC ROUTES
//
//Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Apartments
Route::get('/apartments', 'ApartmentController@index')->name('search-page');
Route::get('/apartments/{id}', 'ApartmentController@show')->name('ap-details');

//messages routes
Route::get('/message/{id}', 'MessageController@create')->name('send-message');
Route::post('/message/{id}', 'MessageController@store')->name('store-message');


// PRIVATE ROUTES
//
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
    // Admin's home
    Route::get('/', 'HomeController@index')->name('home');
    // Here all the admin's route with CRUD opertaions
    Route::resource('apartments', 'ApartmentController');

    // Sponsorship
    Route::get('/sponsorships/{id}', 'SponsorshipController@index')->name('sponsor-page');
    
    // Braintree
    Route::get('/payment/{id}/{thisApartmentId}', 'BraintreeController@index')->name('payment');
    Route::post('/checkout', 'BraintreeController@sale')->name('braintree-checkout');
    Route::get('/thankyou/{thisApartmentId}/{transactionId}', 'BraintreeController@success')->name('thankyou');
});

