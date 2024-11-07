<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteRequestController;


Route::get('/', function () {
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/request-quote', [QuoteRequestController::class, 'store'])->name('request.quote');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
