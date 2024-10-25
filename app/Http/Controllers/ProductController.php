<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Book;        // for method showProductDetail
use App\Models\Electronic;  // for method showProductDetail
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('mississipy.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mississipy.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('mississipy.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('mississipy.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('mississipy.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('mississipy.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('mississipy.product.index');
    }

    /**
     * Search for products based on a given term.
     */
    public function searchBar(Request $request)
    {
        // Captura o termo de pesquisa vindo da barra de pesquisa
        $termo = $request->input('query');

        // Faz a pesquisa na view vw_ProductDetails
        $products = DB::table('mississipy.vw_ProductDetails')
            ->where(function ($query) use ($termo) {
                $query->where('Book.title', 'like', '%' . $termo . '%')
                    ->orWhere('Author.name', 'like', '%' . $termo . '%');
            })
            ->where('active', true) // Apenas produtos ativos
            ->get();

        // Retorna a view com os resultados da pesquisa
        return view('searchBar', ['products' => $$products]);
    }

    /**
     * Show the detail of a product based on its type.
     */
    public function showProductDetail($product_type, $id)
    {
        // Fetch the product
        $common_details = Product::findOrFail($id);

        // Based on the product type, fetch the specific model
        if ($product_type == 'book') {
            $specific_details = Book::with('Author')->findOrFail($id);
            // Fetch the author details through the BookAuthor table
            $author_details = $specific_details->author;
        } elseif ($product_type == 'electronic') {
            $specific_details = Electronic::findOrFail($id);
        } else {
            abort(404); // Invalid product type
        }

        return view('mississipy.product_detail', [
            'product_type' => $product_type,
            'common_details' => $common_details,
            'specific_details' => $specific_details,
            'author_details' => $author_details ?? null // author details if available
        ]);
    }
}
