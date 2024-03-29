<?php

use App\Models\Region;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

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

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/journals', function () {
    return view('journals');
})->name('journals');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/bylaws', function () {
    return view('bylaws');
})->name('bylaws');

Route::get('/members-society', function () {
    $regions = Region::all();
    return view('members', compact('regions'));
})->name('members-society');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () { 
    Route::resource('users', UserController::class);
    Route::resource('members', MemberController::class);
});

Route::get('getCountries/{id}', [MemberController::class, 'getCountries']);
Route::get('members-society/{region}', [MemberController::class, 'getMembersByRegion']);
Route::get('members-society/country/{country}', [MemberController::class, 'getMembersByCountry']);
