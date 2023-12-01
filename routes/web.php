<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemsController;

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('items')->middleware(['auth'])->group(function () {
    Route::get('/', [ItemsController::class, 'default'])->name('items.default');
    Route::get('/create', [ItemsController::class, 'create'])->name('items.create');
    Route::post('/save', [ItemsController::class, 'save'])->name('items.save');
});
