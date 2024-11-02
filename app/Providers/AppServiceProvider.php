<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// For the Welcome page view composer
use App\Models\Book;
use App\Models\Electronic;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View composer for the welcome page
        View::composer('welcome', function ($view) {
            $books = Book::with('product', 'BookAuthor')->inRandomOrder()->limit(3)->get();
            $electronics = Electronic::with('product')->inRandomOrder()->limit(3)->get();
            
            $view->with(compact('books', 'electronics'));
        });
    }
}
