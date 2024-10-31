<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        \Cart::session($request->user()->id)->add([
            'id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'attributes' => [
                'size' => $request->input('size'),
                'color' => $request->input('color'),
            ],
        ]);

        return redirect()->back()->with('success', 'Item added to cart');
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