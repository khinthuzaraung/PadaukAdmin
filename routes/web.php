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

Route::get('404', function () {
    return view('404');
});

Route::get('blank', function () {
    return view('blank');
});

Route::get('buttons', function () {
    return view('buttons');
});

Route::get('charts', function () {
    return view('charts');
});

Route::get('grids', function () {
    return view('grids');
});

Route::get('icons', function () {
    return view('icons');
});

Route::get('inbox-details', function () {
    return view('inbox-details');
});

Route::get('inbox', function () {
    return view('inbox');
});

Route::get('login', function () {
    return view('login');
});

Route::get('maps', function () {
    return view('maps');
});

Route::get('portlet', function () {
    return view('portlet');
});

Route::get('price', function () {
    return view('price');
});

Route::get('product', function () {
    return view('product');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('typography', function () {
    return view('typography');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});