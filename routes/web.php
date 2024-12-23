<?php

use Illuminate\Support\Facades\Route;
use Umami\Http\Controllers\UmamiController;

Route::prefix('umami')->group(function () {
    Route::get('dashboard', [UmamiController::class, 'dashboard'])->name('umami.dashboard');
});
