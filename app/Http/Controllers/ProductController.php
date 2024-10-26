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
        $termo = strtolower($request->input('query'));

        // Consulta para livros
        $books = DB::connection('mysql_mississipy')
            ->table('Product')
            ->leftJoin('Book', 'Product.id', '=', 'Book.product_id')
            ->leftJoin('BookAuthor', 'Book.product_id', '=', 'BookAuthor.product_id')
            ->leftJoin('Author', 'BookAuthor.author_id', '=', 'Author.id')
            ->select(
                'Product.id as id',
                'Product.product_image as product_image',
                'Book.title as book_title',
                'Book.genre as book_genre',
                'Book.publisher as book_publisher',
                'Author.name as author_name',
                DB::raw('NULL as electronic_brand'),
                DB::raw('NULL as electronic_model')
            )
            ->where(function ($query) use ($termo) {
                $query->whereRaw('LOWER(Book.title) like ?', ["%{$termo}%"])
                    ->orWhereRaw('LOWER(Book.genre) like ?', ["%{$termo}%"])
                    ->orWhereRaw('LOWER(Book.publisher) like ?', ["%{$termo}%"])
                    ->orWhereRaw('LOWER(Author.name) like ?', ["%{$termo}%"]);
            })
            ->where('Product.active', true)
            ->get();

        // Consulta para eletrônicos
        $electronics = DB::connection('mysql_mississipy')
            ->table('Product')
            ->leftJoin('Electronic', 'Product.id', '=', 'Electronic.product_id')
            ->select(
                'Product.id as id',
                'Product.product_image as product_image',
                DB::raw('NULL as book_title'),
                DB::raw('NULL as book_genre'),
                DB::raw('NULL as book_publisher'),
                DB::raw('NULL as author_name'),
                'Electronic.brand as electronic_brand',
                'Electronic.model as electronic_model'
            )
            ->where(function ($query) use ($termo) {
                $query->whereRaw('LOWER(Electronic.brand) like ?', ["%{$termo}%"])
                    ->orWhereRaw('LOWER(Electronic.model) like ?', ["%{$termo}%"]);
            })
            ->where('Product.active', true)
            ->get();

        // Combinar os resultados
        $products = $books->merge($electronics);

        return view('searchBar', ['products' => $products]);
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
