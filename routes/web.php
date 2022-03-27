<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AdminController;

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

Route::resource('/admin', AdminController::class);

Route::controller(RouteController::class)->group(function() {
    Route::get('/', 'main')->name('main');
    Route::get('/profile', 'profile')->name('profile')->middleware('auth');

    Route::get('/{foods}', 'foods');
    Route::get('/sushi', 'foods')->name('sushi');
    Route::get('/kebab', 'foods')->name('kebab');
    Route::get('/pizza', 'foods')->name('pizza');
    Route::get('/drinks', 'foods')->name('drinks');
    Route::get('/burgers', 'foods')->name('burgers');

    Route::get('/{productname}/details', 'details')->name('details');
});
