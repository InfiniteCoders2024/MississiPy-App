<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Electronic;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the books
        $books = Book::all();
        
        // Retrieve the electronics
        $electronics = Electronic::all();

        // Retrieve cart items for the logged-in user
        $cartItems = Cart::session($request->user()->id)->getContent();

        return view('dashboard', compact('books', 'electronics', 'cartItems'));
    }
}