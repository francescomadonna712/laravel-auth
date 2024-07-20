<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BoolfolioController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Boolfolio;

use Illuminate\Auth\Events\Verified;

// Rotte protette dall'autenticazione e con prefisso 'admin'
Route::middleware(['auth', 'verified'])
    ->prefix('admin') // definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') // definisce il pattern con cui generare i nomi delle rotte, es. "admin.dashboard"
    ->group(function () {
        // Rotta per la dashboard admin
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Risorsa per BoolfolioController
        Route::resource('boolfolios', BoolfolioController::class);
    });

// Rotta di benvenuto pubblica
Route::middleware(['auth'])->get('/', function () {
    return view('welcome');
})->name('home');

// Rotte di autenticazione generate da Laravel
require __DIR__ . '/auth.php';
