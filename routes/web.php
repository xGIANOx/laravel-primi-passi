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
    $data = [
        'page_title' => 'Home page',
        'message' => 'Hello Laravel\'s World'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'page_title' => 'About page',
        'message' => 'You are now on the about page...about what?!?'
    ];
    return view('home', $data);
})->name('about');
