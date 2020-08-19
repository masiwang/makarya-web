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
// LANDING
Route::get('/', function () {
    return view('client/landing/landing');
});
// AUTH
Route::get('/login', function () {
    return view('client/auth/login');
});
Route::get('/login-old', function () {
    return view('client/auth/login-old');
});
Route::get('/signup', function(){
    return view('client/auth/signup');
});

// PROFILE
Route::get('/profile', function () {
    return view('client/profile/profile');
});
Route::get('/profile/document', function () {
    return view('client/profile/document');
});
Route::get('/profile/address', function () {
    return view('client/profile/address');
});
Route::get('/profile/security', function () {
    return view('client/profile/security');
});
// MARKET
Route::get('/market', function(){
    return view('client/market/all');
});
// INVEST
Route::get('/pembiayaan', function(){
    return view('client/invest/pembiayaan');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
