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

/* Front (no login) */
Route::group([], function() {
    /* Home */
    Route::get('/', 'FrontController@index')->name('index');
    /* Policy */
    Route::get('/policy', 'FrontController@policy')->name('policy');
    /* Requirement */
    Route::get('/requirement', 'FrontController@requirement')->name('requirement');
    /* FAQ */
    Route::get('/faq', 'FrontController@faq')->name('faq');
    /* About Us */
    Route::get('aboutus', 'FrontController@aboutus')->name('aboutus');
    /* Contact */
    Route::get('contact', 'FrontController@contact')->name('contact');
    /* Car Rentals */
    Route::get('/carrentals', 'CarRentalController@show')->name('carrentals.show');
    /* Villas */
    Route::get('/villas', 'VillaController@show_all')->name('villas.show_all');
    Route::get('/villas/{id}', 'VillaController@show')->name('villas.show'); // Belum
    /* Villas */
    Route::get('/destinations', 'DestinationController@show_all')->name('destinations.show_all');
    Route::get('/destinations/{id}', 'DestinationController@show')->name('destinations.show');
    /* Tours */
    Route::get('/tours', 'TourController@show_all')->name('tours.show_all');
    Route::get('/tours/search', 'TourController@search')->name('tours.search');
    Route::get('/tours/{id}', 'TourController@show')->name('tours.show');
    
    
        /* Outbound */
    Route::get('/outbound', function () {
        return view ('front.outbound.outbound') ;
    });
    
      /* Motor Rental */
    Route::get('/sewamotor', function () {
        return view ('front.motorrentals.motorrentals') ;
    });
    
           /* Kereta APi */
    Route::get('/keretaapi', function () {
        return view ('front.keretaapi.keretaapi') ;
    });
    
    
    /* Setting */
    Route::get('/clear-cache', function() {
      $exitCode1 = Artisan::call('cache:clear');
      $exitCode2 = Artisan::call('config:clear');
      $exitCode3 = Artisan::call('view:clear');
      $exitCode4 = Artisan::call('route:clear');
      // return what you want
      print_r($exitCode1);
    });
});

// Send Email
// Route::get('/email', 'FrontController@email');

/* Notification */
Route::post('/notification/get', 'NotificationController@get');
Route::get('/notification/read/{id}', 'NotificationController@read');

/* Admin */
// Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
//     /* Car Rentals */
//     Route::group(['prefix' => 'carrentals'], function() {
//         Route::get('/', 'CarRentalController@index')->name('admin.carrentals.index');
//         Route::get('create', 'CarRentalController@create')->name('admin.carrentals.create');
//         Route::post('store', 'CarRentalController@store')->name('admin.carrentals.store');
//         Route::get('edit/{id}', 'CarRentalController@edit')->name('admin.carrentals.edit');
//         Route::put('update/{id}', 'CarRentalController@update')->name('admin.carrentals.update');
//         Route::delete('destroy/{id}', 'CarRentalController@destroy')->name('admin.carrentals.destroy');
//     });
//     /* Villa */
//     Route::group(['prefix' => 'villa'], function() {
//         Route::get('/', 'VillaController@index')->name('admin.villa.index');
//         Route::get('create', 'VillaController@create')->name('admin.villa.create');
//         Route::post('store', 'VillaController@store')->name('admin.villa.store');
//         Route::get('edit/{id}', 'VillaController@edit')->name('admin.villa.edit');
//         Route::put('update/{id}', 'VillaController@update')->name('admin.villa.update');
//         Route::delete('destroy/{id}', 'VillaController@destroy')->name('admin.villa.destroy');
//     });
//     /* Destination */
//     Route::group(['prefix' => 'destinations'], function() {
//         Route::get('/', 'DestinationController@index')->name('admin.destinations.index');
//         Route::get('create', 'DestinationController@create')->name('admin.destinations.create');
//         Route::post('store', 'DestinationController@store')->name('admin.destinations.store');
//         Route::get('edit/{id}', 'DestinationController@edit')->name('admin.destinations.edit');
//         Route::put('update/{id}', 'DestinationController@update')->name('admin.destinations.update');
//         Route::delete('destroy/{id}', 'DestinationController@destroy')->name('admin.destinations.destroy');
//     });
//     /* Request Booking */
//     Route::group(['prefix' => 'requestbookings'], function() {
//         Route::get('/', 'RequestBookingController@index')->name('admin.requestbookings.index');
//         Route::get('show/{id}', 'RequestBookingController@show')->name('admin.requestbookings.show');
//         Route::put('update/{id}', 'RequestBookingController@update')->name('admin.requestbookings.update');
//         Route::delete('destroy/{id}', 'RequestBookingController@destroy')->name('admin.requestbookings.destroy');
//     });
//     /* Tour */
//     Route::group(['prefix' => 'tours'], function() {
//         Route::get('/', 'TourController@index')->name('admin.tours.index');
//         Route::get('create', 'TourController@create')->name('admin.tours.create');
//         Route::post('store', 'TourController@store')->name('admin.tours.store');
//         Route::get('edit/{id}', 'TourController@edit')->name('admin.tours.edit');
//         Route::put('update/{id}', 'TourController@update')->name('admin.tours.update');
//         Route::delete('destroy/{id}', 'TourController@destroy')->name('admin.tours.destroy');
//     });
//     /* Tours Meta */
//     Route::group(['prefix' => 'toursmeta'], function() {
//         Route::get('/{id}', 'ToursMetaController@index')->name('admin.toursmeta.index');
//         Route::get('create/{id}', 'ToursMetaController@create')->name('admin.toursmeta.create');
//         Route::post('store/{id}', 'ToursMetaController@store')->name('admin.toursmeta.store');
//         Route::get('edit/{id}', 'ToursMetaController@edit')->name('admin.toursmeta.edit');
//         Route::put('update/{id}', 'ToursMetaController@update')->name('admin.toursmeta.update');
//         Route::delete('destroy/{id}', 'ToursMetaController@destroy')->name('admin.toursmeta.destroy');
//     });
//     /* Tours Meta */
//     Route::group(['prefix' => 'toursdate'], function() {
//         Route::get('/{id}', 'ToursDateController@index')->name('admin.toursdate.index');
//         Route::get('create/{id}', 'ToursDateController@create')->name('admin.toursdate.create');
//         Route::post('store/{id}', 'ToursDateController@store')->name('admin.toursdate.store');
//         Route::get('edit/{id}', 'ToursDateController@edit')->name('admin.toursdate.edit');
//         Route::put('update/{id}', 'ToursDateController@update')->name('admin.toursdate.update');
//         Route::delete('destroy/{id}', 'ToursDateController@destroy')->name('admin.toursdate.destroy');
//     });
//     /* Bookings */
//     Route::group(['prefix' => 'bookings'], function() {
//         Route::get('/', 'BookingController@index')->name('admin.bookings.index');
//         Route::put('update/{id}', 'BookingController@update')->name('admin.bookings.update');
//         Route::delete('destroy/{id}', 'BookingController@destroy')->name('admin.bookings.destroy');
//         Route::get('show', 'BookingController@show')->name('admin.bookings.show');
//     });
//     /* Users */
//     Route::group(['prefix' => 'users'], function() {
//         Route::get('/', 'UsersController@index')->name('admin.users.index');
//     });
//     /* Admin */
//     Route::group(['prefix' => 'admins'], function() {
//         Route::get('/', 'UsersController@admin_index')->name('admin.admins.index');
//         Route::get('create', 'UsersController@create')->name('admin.admins.create');
//         Route::post('store', 'UsersController@store')->name('admin.admins.store');
//         Route::get('edit/{id}', 'UsersController@edit')->name('admin.admins.edit');
//         Route::put('update/{id}', 'UsersController@update')->name('admin.admins.update');
//         Route::delete('destroy/{id}', 'UsersController@destroy')->name('admin.admins.destroy');
//     });
// });

/* User */
Route::group(['middleware' => ['verified']], function() {
    /* Home */
    Route::get('home', 'HomeController@index')->name('home');
    /* Request Booking */
    Route::group(['prefix' => 'user/requestbookings'], function() {
        Route::get('create', 'RequestBookingController@create')->name('user.requestbookings.create');
        Route::post('store', 'RequestBookingController@store')->name('user.requestbookings.store');
    });
    /* Bookings */
    Route::group(['prefix' => 'user/bookings'], function() {
        Route::get('/', 'BookingController@mybookings')->name('user.bookings.index');
        Route::get('create/{id}', 'BookingController@create')->name('user.bookings.create');
        Route::post('store/{id}', 'BookingController@store')->name('user.bookings.store');
        Route::get('review/{id}', 'BookingController@review')->name('user.bookings.review');
        Route::get('payment/{id}', 'BookingController@payment')->name('user.bookings.payment');
        Route::get('print/{id}', 'BookingController@print')->name('user.bookings.print');
        Route::get('toursmeta/{id}', 'BookingController@toursmeta')->name('user.bookings.toursmeta');
    });
});

/* Login */
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes(['verify' => true]);
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
