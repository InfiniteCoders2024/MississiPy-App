<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Get the Price

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'product_type' => 'required',
            'product_id' => 'required', // This should be the correct product ID
            'name' => 'required',
        ]);

        // Retrieve the product from the database
        $product = Product::findOrFail($request->input('product_id'));

        // Get the user's cart session
        $cart = \Cart::session($request->user()->id);

        // Check if the product is already in the cart
        $existingItem = $cart->get($request->input('product_id'));

        if ($existingItem) {
            // If it exists, update the quantity
            $cart->update($existingItem->id, [
                'quantity' => $existingItem->quantity + 1,
            ]);
        } else {
            // If it does not exist, add a new item to the cart
            $cart->add([
                'id' => $product->id,
                'name' => $request->input('name'),
                'price' => $product->price,
                'quantity' => 1, // Starting quantity
                'product_type' => $request->input('product_type'),

            ]);
        }

        return redirect()->back()->with('success', 'Item added to cart: ' . $product->name);
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