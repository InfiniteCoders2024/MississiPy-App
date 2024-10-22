<?php

namespace App\Http\Controllers;

use App\Models\Ordered_Item;
use Illuminate\Http\Request;

class OrderedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordered_items = Ordered_Item::all();
        return view('mississipy.ordered_item.index', compact('ordered_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.ordered_item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ordered_Item::create($request->all());
        return redirect()->route('mississipy.ordered_item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordered_Item $ordered_Item)
    {
        return view('mississipy.ordered_item.show', compact('ordered_item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordered_Item $ordered_Item)
    {
        return view('mississipy.ordered_item.edit', compact('ordered_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordered_Item $ordered_Item)
    {
        $ordered_item->update($request->all());
        return redirect()->route('mississipy.ordered_item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordered_Item $ordered_Item)
    {
        $ordered_item->delete();
        return redirect()->route('mississipy.ordered_item.index'); 
    }
}
