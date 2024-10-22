<?php

namespace App\Http\Controllers;

use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electronics = Electronic::all();
        return view('mississipy.electronic.index', compact('electronics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.electronic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Electronic::create($request->all());
        return redirect()->route('electronic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Electronic $electronic)
    {
        return view('mississipy.electronic.show', compact('electronic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Electronic $electronic)
    {
        return view('mississipy.electronic.edit', compact('electronic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Electronic $electronic)
    {
        $electronic->update($request->all());
        return redirect()->route('mississipy.electronic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Electronic $electronic)
    {
        $electronic->delete();
        return redirect()->route('mississipy.electronic.index');
    }
}
