<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empregado</title>

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

    <!-- Buttons to View Resources -->
    <div class="text-center mt-4">
        <button onclick="window.location.href='/author'" class="btn btn-primary">View Authors</button>
        <button onclick="window.location.href='/book'" class="btn btn-primary">View Books</button>
        <button onclick="window.location.href='/electronic'" class="btn btn-primary">View Electronics</button>
        <button onclick="window.location.href='/order'" class="btn btn-primary">View Orders</button>
    </div>

    <p>Add a new:</p>

    <div class="text-center mt-4">
    <button onclick="window.location.href='/author/create'" class="btn btn-primary">
        Author
    </button>
        <button onclick="window.location.href='/product/create'" class="btn btn-primary">
        Product
    </button>
    <button onclick="window.location.href='/book/create'" class="btn btn-primary">
        Book
    </button>
    <button onclick="window.location.href='/electronic/create'" class="btn btn-primary">
        Electronic
    </button>
    <button onclick="window.location.href='/client/create'" class="btn btn-primary">
        Client
    </button>
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
</html>
