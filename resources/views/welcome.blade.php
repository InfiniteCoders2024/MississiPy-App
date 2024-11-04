<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MississiPy</title>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Adiciona o Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Ícones Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Book & Electronic section -->
    <style>
        /* Commom */
        .card {
            background-color: #ffffff;
            transition: box-shadow 0.3s;
        }
        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .square-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }

        /*  Books */
        .books {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }

        /* Electronics*/
        .electronics {
            background-color: #d1e7ff;
            padding: 15px;
            border-radius: 5px;
        }
    </style>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Banner com contêineres quadrados sobrepostos -->
    <div id="bannerCarousel" class="carousel slide carousel-fade banner-container" data-bs-ride="carousel"
        data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100 banner-image" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100 banner-image" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="images/banner3.jpg" class="d-block w-100 banner-image" alt="Imagem 3">
            </div>
        </div>

        <!-- Controles de navegação -->
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>

        <!-- Contêineres quadrados sobrepostos ao banner -->
        <div class="container-wrapper">



                <!-- Books  -->
                <div class="square-container side-square">
                    <div class="books">
                        <h7 class="text-center my-2">Books</h7>
                        <div class="row">
                            @if($books->isEmpty())
                                <p class="text-center">No books available.</p>
                            @else
                                @foreach($books as $book)
                                    <div class="col-md-4">
                                        <div class="card mb-3 shadow-sm">
                                            <div class="card-body">
                                                <h8 class="card-title">{{ $book->title }}</h8>
                                                <p class="card-text">
                                                    <span class="badge bg-info text-dark">{{ $book->genre }}</span>
                                                </p>
                                                <img src="{{ $book->product->product_image }}" class="img-fluid">

                                                <!-- Check if there are authors -->

                                                <!-- 
                                                    @if($book->bookauthor->isEmpty())
                                                        <p>Authors unavailable</p>
                                                    @else
                                                        <h6>Authors:</h6>
                                                        <ul>
                                                            @foreach($book->author as $writer)
                                                                <li>{{ $writer->name }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- / Books  -->

                <!-- Electronic -->
                <div class="square-container side-square">
                    <div class="electronics">
                        <h7 class="text-center my-2">Electronics</h7>
                        <div class="row">
                            @if($electronics->isEmpty())
                            <p class="text-center">No elctronics available.</p>
                            @else
                            @foreach($electronics as $electronic)
                            <div class="col-md-4">
                                <div class="card mb-3 shadow-sm border-0">
                                    <div class="card-body">
                                        <h8 class="card-title">{{ $electronic->model }}</h8>
                                        <p class="card-text">
                                            <span class="badge bg-success text-white">{{ $electronic->brand }}</span>
                                        </p>
                                        <img src="{{ $electronic->product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- / Electronic -->

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

    <!-- Footer -->
    <footer class="footer bg text-light text-center py-4">
        <div class="container">
            <p class="mb-0">{{ date('Y') }} © Copyright - Projecto desenvolvido por Miguel Carvalho e Joaquim
                Falcão.</p>
        </div>
    </footer>
    <!-- Bootstrap JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
