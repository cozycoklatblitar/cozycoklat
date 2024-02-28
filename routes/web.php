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

Route::get('/home', function () {
    return view('home');
});

Route::get('/card1', function () {
    return view('card1');
});

Route::get('/card2', function () {
    return view('card2');
});

Route::get('/card3', function () {
    return view('card3');
});

Route::get('/card4', function () {
    return view('card4');
});

Route::get('/card5', function () {
    return view('card5');
});

Route::get('/card6', function () {
    return view('card6');
});

Route::get('/card7', function () {
    return view('card7');
});

Route::get('/card8', function () {
    return view('card8');
});

Route::get('/card9', function () {
    return view('card9');
});

Route::get('/card10', function () {
    return view('card10');
});

Route::get('/card11', function () {
    return view('card11');
});