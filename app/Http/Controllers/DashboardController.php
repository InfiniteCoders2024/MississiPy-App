<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Electronic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve the books from the database
        $books = Book::all();
        $electronics = Electronic::all();

        return view('dashboard', compact('books', 'electronics'));
    }
}