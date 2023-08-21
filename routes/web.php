<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotta characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Rotta comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// Rotta movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Rotta tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Rotta games
Route::get('/games', function () {
    return view('games');
})->name('games');

// Rotta collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Rotta videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Rotta fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Rotta News
Route::get('/news', function () {
    return view('news');
})->name('news');

// Rotta Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
