<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


// In je routes/web.php
Route::middleware(['auth', 'role:Finance'])->get('/dashboard/finance', [DashboardController::class, 'finance'])->name('dashboard.finance');
Route::middleware(['auth', 'role:Sales'])->get('/dashboard/sales', [DashboardController::class, 'sales'])->name('dashboard.sales');
Route::middleware(['auth', 'role:Marketing'])->get('/dashboard/marketing', [DashboardController::class, 'marketing'])->name('dashboard.marketing');
Route::middleware(['auth', 'role:Maintenance'])->get('/dashboard/maintenance', [DashboardController::class, 'maintenance'])->name('dashboard.maintenance');
Route::middleware(['auth', 'role:Head Finance'])->get('/dashboard/head-finance', [DashboardController::class, 'headFinance'])->name('dashboard.head-finance');
Route::middleware(['auth', 'role:Head Sales'])->get('/dashboard/head-sales', [DashboardController::class, 'headSales'])->name('dashboard.head-sales');
Route::middleware(['auth', 'role:Head Marketing'])->get('/dashboard/head-marketing', [DashboardController::class, 'headMarketing'])->name('dashboard.head-marketing');
Route::middleware(['auth', 'role:Head Maintenance'])->get('/dashboard/head-maintenance', [DashboardController::class, 'headMaintenance'])->name('dashboard.head-maintenance');
Route::middleware(['auth', 'role:CEO'])->get('/dashboard/ceo', [DashboardController::class, 'ceo'])->name('dashboard.ceo');
Route::middleware(['auth', 'role:Guest'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Voor gebruikers zonder specifieke rol


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
