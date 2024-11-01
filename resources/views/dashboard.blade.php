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
<body>
   <!-- Navbar -->
   @include('layouts.navbar')

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

<!-- Botões para Visualizar Recursos -->
<div class="text-center mt-4">
    <button onclick="window.location.href='/author'" class="btn btn-primary">
        View Authors
    </button>
    <button onclick="window.location.href='/book'" class="btn btn-primary">
        View Books
    </button>
    <button onclick="window.location.href='/electronic'" class="btn btn-primary">
        View Electronics
    </button>
    <button onclick="window.location.href='/order'" class="btn btn-primary">
        View Orders
    </button>

    <div>
        <p>
            <a href="{{ route('cart.view') }}" class="btn btn-primary">View your shopping cart</a>
        </p>
    </div>
</div>
</body>
<!-- Footer -->
<footer class="footer bg text-light text-center py-4">
    <div class="container">
        <p class="mb-0">&copy; {{ date('Y') }} © Copyright Projecto desenvolvido por Miguel Carvalho e Joaquim
            Falcão.</p>
    </div>
</footer>
<!-- Bootstrap JS e Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
