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

Route::get('/', function () {
    return view('home', ['title' => 'Compagnie Par Malice']);
});

Route::get('compagnie', function () {
    return view('compagnie', ['title' => 'Les membres']);
});

Route::get('nina', function () {
    return view('nina', ['title' => "C'est Nina qui m'a dit"]);
});

