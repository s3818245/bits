<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

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
    return view('index',['title' => 'Home Page']);
});


Route::get('/gamepage', function () {
    return view('gamepage',['title' => 'Game Page']);
});

Route::get('/profilepage', function () {
    return view('profilepage',['title' => 'Profile Page']);
});

Route::get('/login', function () {
    return view('login',['title' => 'Login']);
});

Route::get('/signup', function () {
    return view('signup',['title' => 'Sign Up']);
});

Route::get('/testing', [TestingController::class, 'index']);