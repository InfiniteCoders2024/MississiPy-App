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
        'product_id' => 'required',
        'name' => 'required',
        'quantity' => 'required|integer',
    ]);

    // Retrieve the product from the database
    $product = Product::find($request->input('product_id'));

    // Get the user's cart session
    $cart = \Cart::session($request->user()->id);

    // Check if the product is already in the cart
    $existingItem = $cart->get($request->input('product_id'));

    if ($existingItem) {
        // If it exists, update the quantity
        $cart->update($request->input('product_id'), [
            'quantity' => $existingItem->quantity + $request->input('quantity'),
        ]);
    } else {
        // If it does not exist, add a new item to the cart
        $cart->add([
            'id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
        ]);
    }

    $cartContent = $cart->getContent();
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