<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/opium', function () {
    return view('index');
});


//Route::resource('/','IndexController');
//vitrineevent



Route::auth();
//route événements
Route::get('/event', function () {
    return view('event');
});

Route::get('/event_vitrine', function () {
    return view('event_vitrine');
});

Route::get('/ajoutevent', function () {
    return view('ajoutevent');
});

//route réservation
Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/reservation_en_pdf', function () {
    return view('reservation_en_pdf');
});

Route::get('/modifbook', function () {
    return view('modifbook');
});



Route::get('/popupreserv', function () {
    return view('popupreserv');
});

Route::get('/page404', function () {
    return view('page404');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/eat', function () {
    return view('eat');
});

Route::get('/drink', function () {
    return view('drink');
});

Route::get('/propos', function () {
    return view('about');
});


//Route contact
Route::get('/Message', function () {
    return view('message');
});



Route::get('/home', 'HomeController@index');
//route event
Route::resource('event_vitrine','EventVitrine');
Route::get('/opium','IndexController@index2');
//tableau de bord
Route::resource('/event', 'eventcontroller');
Route::get('/event', 'eventcontroller@index2');
Route::get('/Supprimer/Evénnement','eventcontroller@destroy');
Route::get('/event/{id}/edit','eventcontroller@edit');
Route::put('/event/{id}','eventcontroller@update');
Route::get('/Rechercher/Evénnement','eventcontroller@search');
Route::get('/Evennement/{date}','eventcontroller@getEventWithDate');
//route réservation
Route::resource('/reservation', 'BookingController');
Route::get('/reservation_vitrine/{date}','BookingController@getEventDate');
Route::get('/reservation', 'BookingController@index');
Route::get('viewreservation/{id}/{date}' , 'BookingController@detail');
Route::get('reservation_en_pdf/{datee}' , 'BookingController@exportpdf');
Route::get('/Réservations/reservation_en_pdf' , 'BookingController@exportTodayBookingpdf');
Route::get('/popupreserv', 'BookingController@PopUp');
Route::get('/Supprimer/Réservation','BookingController@destroy');
Route::get('/reservationm/{id}/edit','BookingController@edit');
Route::put('/reservationm/{id}','BookingController@update');
Route::get('/Rechercher/Réservation','BookingController@search');
Route::get('/Trier_reservation_par_date','BookingController@sortWithDate');

//Route contact
Route::post('/EnvoyerMessage','ContactController@AddMessage');
Route::get('/Message','ContactController@index');
Route::get('/Rechercher/Contact','ContactController@search');
Route::get('/Contact/Supprimer','ContactController@destroy');