<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Route de test
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
});

