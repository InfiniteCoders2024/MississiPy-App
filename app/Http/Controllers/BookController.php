<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema; // For method searchBookFor

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('mississipy.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.book.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('mississipy.book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('mississipy.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('mississipy.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('mississipy.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('mississipy.book.index');
    }

    /**
     * Search the table book with the search text.
     */

    public function searchBookFor($searchText)
    {
        // Get all column names from the Book table
        $columns = ['isbn13', 'title', 'genre', 'publisher', 'publication_date'];

        // Build the query
        $query = Book::query();

        foreach ($columns as $column) {
            $query->orWhere($column, 'LIKE', "%{$searchText}%");
        }

        // Execute the query and get the results
        $results = $query->get();

        // Return the view with the results
        return view('mississipy.search_result', [
            'product_type' => 'book',
            'results' => $results,
            'searchText' => $searchText
        ]);
    }
}
