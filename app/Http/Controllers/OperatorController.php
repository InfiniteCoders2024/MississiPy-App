<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $operators_list = Operator::all();
        return view('mississipy.operator.index', ['operators' => $operators_list]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.operator.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Operator::create($request->all());
        return redirect()->route('mississipy.operator.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Operator $operator)
    {
        return view('mississipy.operator.show', compact('operator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operator $operator)
    {
        return view('mississipy.operator.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operator $operator)
    {
        $operator->update($request->all());
        return redirect()->route('mississipy.operator.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return redirect()->route('mississipy.operator.index');
    }
}
