<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('mississipy.order.index', compact('orders'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('mississipy.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('mississipy.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('mississipy.order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('mississipy.order.index');
    }
}
