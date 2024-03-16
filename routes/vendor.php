<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendordashboard');
