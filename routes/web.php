<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\websiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('home', [websiteController::class, 'index']);
Route::get('about', [websiteController::class, 'about']);

require __DIR__.'/auth.php';
