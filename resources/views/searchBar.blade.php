<!DOCTYPE html>

@extends('layouts.app')

@section('title', 'Search Products')

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Products - MississiPy</title>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Limitar a altura do container de produtos e adicionar rolagem */
        .product-container {
            max-height: 500px;
            overflow-y: auto;
            padding: 10px;
        }

        /* Estilo para rolagem */
        .product-container::-webkit-scrollbar {
            width: 8px;
        }
        .product-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }
        .product-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Estilização dos cards */
        .product-card {
            width: 18rem;
            margin: 10px;
            border: 3px solid;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card-img-top {
            object-fit: cover;
            height: 200px;
            width: 100%; /* Garante que a imagem ocupe toda a largura do card */
            border-radius: 0;
        }

        .product-card-body {
            padding: 15px;
        }

        .product-card-title {
            font-size: 1.25rem;
        }

        .product-card-text {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container my-5">
        <h1 class="mb-4 text-center">Search Results</h1>

        <!-- Container para os Resultados com Estilização e Rolagem -->
        <div class="product-container d-flex flex-wrap justify-content-center">
            @if ($products->isEmpty())
                <div class="alert alert-info text-center" role="alert">
                    No products found for the search term.
                </div>
            @else
                @foreach ($products as $product)
                    <div class="product-card">
                        <img src="{{ $product->product_image }}" class="product-card-img-top" alt="Product Image">
                        <div class="product-card-body">
                            <h5 class="product-card-title text-primary">{{ $product->book_title ?? $product->electronic_brand }}</h5>
                            <p class="product-card-text">
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
                        <div class="row align-items-center text-center g-0">
                            <div class="col-12">
                                <h5>{{ $product->price ?? '€0.00' }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">{{ date('Y') }} © Copyright - Projecto desenvolvido por Miguel Carvalho e Joaquim Falcão.</p>
        </div>
    </footer>

    <!-- Bootstrap JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
