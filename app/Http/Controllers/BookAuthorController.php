<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookauthors = BookAuthor::all();
        return view('mississipy.bookauthor.index', compact('bookauthors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.bookauthor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BookAuthor::create($request->all());
        return redirect()->route('mississipy.bookauthor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookAuthor $bookAuthor)
    {
        return view('mississipy.bookauthor.show', compact('bookauthor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookAuthor $bookAuthor)
    {
        return view('mississipy.bookauthor.edit', compact('bookauthor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookAuthor $bookAuthor)
    {
        $bookAuthor->update($request->all());
        return redirect()->route('mississipy.bookauthor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookAuthor $bookAuthor)
    {
        $bookAuthor->delete();
        return redirect()->route('mississipy.bookauthor.index');
    }
}
