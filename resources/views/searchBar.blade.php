@extends('layouts.app')

@section('title', 'Search Products')

@section('content')
    <h1>Search Results</h1>

    @if ($products->isEmpty())
        <p>No products found for the search term.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>ID:</strong> {{ $product->product_id }}<br>
                    <strong>Price:</strong> €{{ number_format($product->price, 2) }}<br>
                    <strong>Score:</strong> {{ $product->score }}<br>
                    <strong>Type:</strong>
                    @if ($product->book_title)
                        <span>Book</span><br>
                        <strong>Title:</strong> {{ $product->book_title }}<br>
                        <strong>Author:</strong> {{ $product->author_name }}<br>
                        <strong>Genre:</strong> {{ $product->genre }}<br>
                    @elseif ($product->brand)
                        <span>Electronic</span><br>
                        <strong>Brand:</strong> {{ $product->brand }}<br>
                        <strong>Model:</strong> {{ $product->model }}<br>
                        <strong>Type:</strong> {{ $product->electronic_type }}<br>
                    @endif
                    <img src="{{ $product->product_image }}" alt="Product Image" style="width:100px;"><br>
                </li>
                <hr>
            @endforeach
        </ul>
    @endif
@endsection
