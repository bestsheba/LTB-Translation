<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\QuoteController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\LanguageController;

// Language switching route
Route::get('/language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

// Frontend routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::controller(QuoteController::class)->group(function () {
    Route::get('/quote', 'index')->name('quote.index');
    Route::post('/quote', 'store')->name('quote.store');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Load admin routes
require __DIR__ . '/admin.php';
