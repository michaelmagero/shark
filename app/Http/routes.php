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
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/how', function () {
    return view('pages.how');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return view('administrator.admin');
});

Route::get('/writer', function () {
    return view('writers.writer');
});

Route::get('/client', function () {
    return view('client.client');
});