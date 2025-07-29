<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Default welcome
Route::get('/', function () {
    return view('welcome');
});

// Admin route with middleware
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('checkadmin');

// Unauthorized route
Route::get('/unauthorized', function () {
    return view('unauthorized');
});

