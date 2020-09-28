<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia\Inertia::render('AppStoreFrontLayout');
})->name('storefront');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/category',[CategoryController::class, 'index']);
});
