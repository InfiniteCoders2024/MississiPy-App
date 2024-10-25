@extends('layouts.app')

@section('title', 'Search Products')

@section('content')
    <div class="container">
        <h1 class="mb-4">Search Results</h1>

        @if ($products->isEmpty())
            <div class="alert alert-info" role="alert">
                No products found for the search term.
            </div>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $product->product_image }}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->book_title ?? $product->brand }}</h5>
                                <p class="card-text">
                                    <strong>ID:</strong> {{ $product->product_id }}<br>
                                    <strong>Price:</strong> €{{ number_format($product->price, 2) }}<br>
                                    <strong>Score:</strong> {{ $product->score }}<br>
                                    <strong>Type:</strong>
                                    @if ($product->book_title)
                                        Book<br>
                                        <strong>Author:</strong> {{ $product->author_name }}<br>
                                        <strong>Genre:</strong> {{ $product->genre }}
                                    @elseif ($product->brand)
                                        Electronic<br>
                                        <strong>Model:</strong> {{ $product->model }}<br>
                                        <strong>Type:</strong> {{ $product->electronic_type }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
