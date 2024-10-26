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
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Banner com contêineres quadrados sobrepostos -->
    <div id="bannerCarousel" class="carousel slide carousel-fade banner-container" data-bs-ride="carousel" data-bs-interval="5000">
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
            <div class="square-container main-square">2/4 para o destaque</div>
            <div class="side-square-wrapper">
                <div class="square-container side-square">1/4 para lista de livros</div>
                <div class="square-container side-square">1/4 para lista de eletrônicos</div>
            </div>
        </div>
    </div>

    <!-- Modal de Pesquisa -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Search Products</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <!-- Bootstrap JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
