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

// site routes
Route::get('/', 'SiteController@showHome')->name('home');

// authentication routes
Route::auth();

// subscription routes

// account routes

// single post route
Route::get('{slug}', 'SiteController@showPost');

