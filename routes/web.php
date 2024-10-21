<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rota for Models

// Books
use App\Http\Controllers\BookController;    
Route::get('/book', [BookController::class, 'index']);

// Operators
use App\Http\Controllers\OperatorController;
Route::get('/operator', [OperatorController::class, 'index']);


// Rota for Views

// welcome_client
Route::get('/welcome_client', function () {
    return view('welcome_client');
})->name('welcome_client');

// search_result
Route::get('/search_result', function () {
    return view('search_result');
});

// product_detail
Route::get('/product_detail', function () {
    return view('product_detail');
});

// checkout
Route::get('/checkout', function () {
    return view('checkout');
});
