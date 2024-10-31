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


// Routes for Models ----------------------------------------------------------------------

// Author
use App\Http\Controllers\AuthorController;

Route::get('/author', [AuthorController::class, 'index'])->middleware('auth');
Route::post('/author', [AuthorController::class, 'store'])->name('mississipy.author.store');
Route::get('/author/create', [AuthorController::class, 'create'])->name('mississipy.author.create');

// Book
use App\Http\Controllers\BookController;

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::post('/book', [BookController::class, 'store'])->name('mississipy.book.store');
Route::get('/book/create', [BookController::class, 'create'])->name('mississipy.book.create');

// BookAuthor
use App\Http\Controllers\BookAuthorController;

Route::get('/bookauthor', [BookAuthorController::class, 'index'])->middleware('auth');

// Client
use App\Http\Controllers\ClientController;

Route::get('/client', [ClientController::class, 'index'])->middleware('auth');
Route::post('/client', [ClientController::class, 'store'])->name('mississipy.client.store');
Route::get('/client/create', [ClientController::class, 'create'])->name('mississipy.client.create');

// Electronic
use App\Http\Controllers\ElectronicController;

Route::get('/electronic', [ElectronicController::class, 'index'])->middleware('auth');
Route::post('/electronic', [ElectronicController::class, 'store'])->name('mississipy.electronic.store');
Route::get('/electronic/create', [ElectronicController::class, 'create'])->name('mississipy.electronic.create');

// Operator
use App\Http\Controllers\OperatorController;

Route::get('/operator', [OperatorController::class, 'index'])->middleware('auth');
Route::post('/operator', [OperatorController::class, 'store'])->name('mississipy.operator.store');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('mississipy.operator.create');

// Order
use App\Http\Controllers\OrderController;

Route::get('/order', [OrderController::class, 'index'])->middleware('auth');
Route::post('/order', [OrderController::class, 'store'])->name('mississipy.order.store');
Route::get('/order/create', [OrderController::class, 'create'])->name('mississipy.order.create');

// Ordered_item
use App\Http\Controllers\OrderedItemController;

Route::get('/ordered_item', [OrderedItemController::class, 'index'])->middleware('auth');
Route::post('/ordered_item', [OrderedItemController::class, 'store'])->name('mississipy.ordered_item.store');
Route::get('/ordered_item/create', [OrderedItemController::class, 'create'])->name('mississipy.ordered_item.create');

// Product
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index'])->middleware('auth');
Route::post('/product', [ProductController::class, 'store'])->name('mississipy.product.store');
Route::get('/product/create', [ProductController::class, 'create'])->name('mississipy.product.create');
Route::get('/product/{product_type}/{id}', [ProductController::class, 'showProductDetail'])->name('mississipy.product.detail');

// Recommendation
use App\Http\Controllers\RecommendationController;

Route::get('/recommendation', [RecommendationController::class, 'index'])->middleware('auth');
Route::post('/recommendation', [RecommendationController::class, 'store'])->name('mississipy.recommendation.store');
Route::get('/recommendation/create', [RecommendationController::class, 'create'])->name('mississipy.recommendation.create');


// Route for NavBar Pesquisa -------------------------------------------------------------

Route::get('/searchBar', [ProductController::class, 'searchBar'])->name('searchBar');


// Route for the Shopping Cart
use App\Http\Controllers\CartController;

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/view', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
