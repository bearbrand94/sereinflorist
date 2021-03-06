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
    return view('home');
});
Route::get('/wip', function () {
    return view('home');
})->name('home');

Route::get('/wedding', function() {
	return view('services.wedding');
})->name('wedding');

Route::get('/decoration', function() {
	return view('services.decoration');
})->name('decoration');

Route::get('/gallery', function() {
	return view('gallery');
})->name('gallery');

Route::get('/eternelle', function() {
	return view('eternelle');
})->name('eternelle');

Route::get('/contact', function() {
	return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/terms', function () {
    return view('home');
})->name('terms');