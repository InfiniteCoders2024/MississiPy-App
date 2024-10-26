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
                                <h5 class="card-title">{{ $product->book_title ?? $product->electronic_brand }}</h5>
                                <p class="card-text">
                                    @if ($product->book_title)
                                        Book<br>
                                        <strong>Title:</strong> {{ $product->book_title }}<br>
                                        <strong>Genre:</strong> {{ $product->book_genre }}<br>
                                        <strong>Publisher:</strong> {{ $product->book_publisher }}<br>
                                        <strong>Author:</strong> {{ $product->author_name }}
                                    @elseif ($product->electronic_brand)
                                        Electronic<br>
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

