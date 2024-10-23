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

require __DIR__ . '/auth.php';

// Rotas for Models ------------------------------------------------------------

// Author
use App\Http\Controllers\AuthorController;

Route::get('/author', [AuthorController::class, 'index']);


Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');

// Book
use App\Http\Controllers\BookController;

Route::get('/book', [BookController::class, 'index']);

// BookAuthor
use App\Http\Controllers\BookAuthorController;

Route::get('/bookauthor', [BookAuthorController::class, 'index']);

// Client
use App\Http\Controllers\ClientController;

Route::get('/client', [ClientController::class, 'index']);

// Electronic
use App\Http\Controllers\ElectronicController;

Route::get('/electronic', [ElectronicController::class, 'index']);

// Operator
use App\Http\Controllers\OperatorController;

Route::get('/operator', [OperatorController::class, 'index']);

// Order
use App\Http\Controllers\OrderController;

Route::get('/order', [OrderController::class, 'index']);

// Ordered_item
use App\Http\Controllers\OrderedItemController;

Route::get('/ordered_item', [OrderedItemController::class, 'index']);

// Product
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index']);

// Route for NavBar Pesquisa e CheckOut -------------------------------------------------------------

Route::get('/searchBar', [ProductController::class, 'searchBar'])->name('searchBar');

// Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');

// Recommendation
use App\Http\Controllers\RecommendationController;

Route::get('/recommendation', [RecommendationController::class, 'index']);

// Rotas for Views --------------------------------------------------------------

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


// Rotas for Forms --------------------------------------------------------------

// Author
Route::get('/author/create', [AuthorController::class, 'create'])->name('mississipy.author.create');
Route::post('/author', [AuthorController::class, 'store'])->name('mississipy.author.store');

// Book
Route::get('/book/create', [BookController::class, 'create'])->name('mississipy.book.create');
Route::post('/book', [BookController::class, 'store'])->name('mississipy.book.store');

// Client
Route::get('/client/create', [ClientController::class, 'create'])->name('mississipy.client.create');
Route::post('/client', [ClientController::class, 'store'])->name('mississipy.client.store');

// Electronic
Route::get('/electronic/create', [ElectronicController::class, 'create'])->name('mississipy.electronic.create');
Route::post('/electronic', [ElectronicController::class, 'store'])->name('mississipy.electronic.store');

// Operator
Route::get('/operator/create', [OperatorController::class, 'create'])->name('mississipy.operator.create');
Route::post('/operator', [OperatorController::class, 'store'])->name('mississipy.operator.store');

// Order
Route::get('/order/create', [OrderController::class, 'create'])->name('mississipy.order.create');
Route::post('/order', [OrderController::class, 'store'])->name('mississipy.order.store');

// Ordered item
Route::get('/ordered_item/create', [OrderedItemController::class, 'create'])->name('mississipy.ordered_item.create');
Route::post('/ordered_item', [OrderedItemController::class, 'store'])->name('mississipy.ordered_item.store');

// Product
Route::get('/product/create', [ProductController::class, 'create'])->name('mississipy.product.create');
Route::post('/product', [ProductController::class, 'store'])->name('mississipy.product.store');

// Recommendation
Route::get('/recommendation/create', [RecommendationController::class, 'create'])->name('mississipy.recommendation.create');
Route::post('/recommendation', [RecommendationController::class, 'store'])->name('mississipy.recommendation.store');
