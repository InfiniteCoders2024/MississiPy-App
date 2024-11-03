<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
        'product_type' => 'required',
        'product_id' => 'required',
        'name' => 'required',
        'quantity' => 'required|integer',
    ]);

        // Retrieve price in the Product Table
        $product = Product::find($request->input('product_id'));

        \Cart::session($request->user()->id)->add([
            'id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
        ]);

        $cartContent = \Cart::session($request->user()->id)->getContent();
        return redirect()->back()->with('success', 'Item added to cart')->with('cartContent', $cartContent);
    }

    public function view()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.view', compact('cartItems'));
    }

   public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        // Authenticated user
        \Cart::session($request->user()->id)->remove($productId);

    return redirect()->back()->with('success', 'Item removed from cart');
    }
}