@extends('layouts.app')

@section('title', 'Search Products')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Search Results</h1>
        @if ($products->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                No products found for the search term.
            </div>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-container">
                                <img src="{{ $product->product_image }}" class="card-img-top img-fluid" alt="Product Image" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $product->book_title ?? $product->electronic_brand }}</h5>
                                <p class="card-text">
                                    @if ($product->book_title)
                                        <span class="badge bg-secondary mb-2">Book</span><br>
                                        <strong>Title:</strong> {{ $product->book_title }}<br>
                                        <strong>Genre:</strong> {{ $product->book_genre }}<br>
                                        <strong>Publisher:</strong> {{ $product->book_publisher }}<br>
                                        <strong>Author:</strong> {{ $product->author_name }}
                                    @elseif ($product->electronic_brand)
                                        <span class="badge bg-info mb-2">Electronic</span><br>
                                        <strong>Brand:</strong> {{ $product->electronic_brand }}<br>
                                        <strong>Model:</strong> {{ $product->electronic_model }}
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
