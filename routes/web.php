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

Route::get('/', function () {
    return view('client/landing');
});

Route::get('/auth', function () {
    return view('client/auth/login');
});

Route::get('/market', function(){
    return view('client/market');
});

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
Route::get('/signup', function(){
    return view('client/auth/signup');
<<<<<<< Updated upstream
});
=======
}); 
>>>>>>> Stashed changes
