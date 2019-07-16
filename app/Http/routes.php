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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/operations', function () {
    return view('operations');
});

Route::get('/about', function () {

    $abouts = \App\about::all();
    return view('about', ['abouts' => $abouts]);
});


Route::post('about', 'AboutController@store');

Route::post('experiences', 'ExperiencesController@store')->name('experiences.store');