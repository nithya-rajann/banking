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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/deposit', function () {
    return view('deposit');
})->name('deposit');

// Route::get('/deposit', "DepositController@index")->name("login.login");
// Route::resource('/deposit', DepositController::class);
Route::get('/withdraw', function () {
    return view('withdraw');
})->name('withdraw');
Route::get('/transfer', function () {
    return view('transfer');
})->name('transfer');
Route::get('/statement', function () {
    return view('statement');
})->name('statement');