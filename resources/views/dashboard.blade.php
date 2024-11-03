<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MississiPy</title>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Limitar a altura do contêiner de produtos e adicionar rolagem vertical */
        .product-container {
            max-height: 500px; /* Ajuste a altura conforme necessário */
            overflow-y: auto;
            padding: 10px;
        }

        /* Estilizar a rolagem */
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

        /* Ajustar os cards para uma altura e largura proporcionais */
        .card {
            width: 28%; /* Ajuste a largura do card para caber três por linha */
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-img-top {
            max-height: 150px; /* Limite a altura da imagem para uma aparência mais compacta */
            object-fit: cover; /* Ajuste a imagem dentro do espaço */
        }
        .card-body {
            padding: 10px;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            font-size: 0.85rem;
        }
        .btn {
            font-size: 0.85rem;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Botão para abrir o Carrinho Offcanvas -->
    <button class="btn btn-primary position-fixed top-50 start-0 translate-middle-y" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas" aria-controls="cartOffcanvas">
        <i class="bi bi-cart-fill"></i> Cart
    </button>

    <!-- Carrinho Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasLabel">Your Shopping Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @if($cartItems->isEmpty())
                <p>Your cart is empty.</p>
            @else
                <ul class="list-group">
                    @foreach($cartItems as $item)
                        <li class="list-group-item">
                            {{ $item->name }} - {{ $item->quantity }} - {{ $item->price }}€
                            <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
                <p><strong>Total:</strong> {{ number_format(Cart::session(auth()->id())->getTotal(), 2) }}€</p>
            @endif
        </div>
    </div>

    <!-- Modal de Pesquisa -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Search Products</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="searchForm" action="{{ route('searchBar') }}" method="GET">
                        <input type="text" name="query" class="form-control" id="searchInput"
                               placeholder="Type your search query..." required>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="searchForm" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Layout -->
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <div class="container mt-4">
        <div class="row">
            <!-- Books Column with Product Cards -->
            <div class="col-md-6">
                <h3 class="text-center my-4">Books</h3>

                @if($books->isEmpty())
                    <p class="text-center">No books available.</p>
                @else
                    <div class="d-flex flex-wrap product-container justify-content-center">
                        @foreach($books as $book)
                            <div class="card border-3 rounded-3 shadow m-2" style="flex: 1 1 calc(33% - 20px); max-width: calc(33% - 20px);">
                                <img src="{{ $book->product->product_image }}" class="card-img-top rounded-0" alt="{{ $book->title }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $book->title }}</h4>
                                    <p class="card-text">
                                        <span class="badge bg-info">{{ $book->genre }}</span>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                        (12223)
                                    </p>
                                </div>
                                <div class="row align-items-center text-center g-0">
                                    <div class="col-4">
                                        <h5>{{ $book->price }}€</h5>
                                    </div>
                                    <div class="col-8">
                                        <form id="addBookForm{{ $book->product_id }}" action="{{ route('cart.add', $book->product_id) }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="product_type" value="book">
                                            <input type="hidden" name="product_id" value="{{ $book->product_id }}">
                                            <input type="hidden" name="name" value="{{ $book->title }}">
                                        </form>
                                        <button type="button" class="btn btn-dark w-100 text-warning" onclick="event.preventDefault(); document.getElementById('addBookForm{{ $book->product_id }}').submit();">
                                            ADD TO CART
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Electronics Column with Product Cards -->
            <div class="col-md-6">
                <h3 class="text-center my-4">Electronics</h3>

                @if($electronics->isEmpty())
                    <p class="text-center">No electronics available.</p>
                @else
                    <div class="d-flex flex-wrap product-container justify-content-center">
                        @foreach($electronics as $electronic)
                            <div class="card border-3 rounded-3 shadow m-2" style="flex: 1 1 calc(33% - 20px); max-width: calc(33% - 20px);">
                                <img src="{{ $electronic->product->product_image }}" class="card-img-top rounded-0" alt="{{ $electronic->model }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $electronic->model }}</h4>
                                    <p class="card-text">
                                        <span class="badge bg-success">{{ $electronic->brand }}</span>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        (24567)
                                    </p>
                                </div>
                                <div class="row align-items-center text-center g-0">
                                    <div class="col-4">
                                        <h5>{{ $electronic->price }}€</h5>
                                    </div>
                                    <div class="col-8">
                                        <form id="addElectronicForm{{ $electronic->product_id }}" action="{{ route('cart.add', $electronic->product_id) }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="product_type" value="electronic">
                                            <input type="hidden" name="product_id" value="{{ $electronic->product_id }}">
                                            <input type="hidden" name="name" value="{{ $electronic->model }}">
                                        </form>
                                        <button type="button" class="btn btn-dark w-100 text-warning" onclick="event.preventDefault(); document.getElementById('addElectronicForm{{ $electronic->product_id }}').submit();">
                                            ADD TO CART
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">{{ date('Y') }} © Copyright - Projecto desenvolvido por Miguel Carvalho e Joaquim Falcão.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
