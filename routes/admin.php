<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SettingController;




Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('settings', [SettingController::class, 'index'])->name('settingslist');
