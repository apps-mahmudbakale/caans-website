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
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/presidential-message', function () {
    return view('president');
})->name('president');


Route::get('/honorary', function () {
    return view('honorary');
})->name('honorary');

Route::get('/officers', function () {
    return view('officers');
})->name('officers');

Route::get('/committee', function () {
    return view('committee');
})->name('committee');

Route::get('/bylaws', function () {
    return view('bylaws');
})->name('bylaws');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
