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

Route::get('/', 'PublicController@showHome')
        ->name('home');

Route::view('/contact', 'contact')
        ->name('contact');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/howToBuy', 'shopinfo')
        ->name('shopinfo');

Route::view('/privacyPolicy', 'privacyPolicy')
        ->name('privacyPolicy');
