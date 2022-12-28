<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wisma;

// Route to wisma controller
Route::get('/', [wisma::class, 'unused']);
Route::get('/det', [wisma::class, 'unusedone']);
Route::get('/order', [wisma::class, 'order']);
Route::get('/fi', [wisma::class, 'find']);
Route::POST('/order', [wisma::class, 'saveorder']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
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
