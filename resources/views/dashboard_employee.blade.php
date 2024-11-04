<!DOCTYPE html>
<html lang="pt">
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
        /* Personalizar os containers sem afetar a navbar */
        body {
            background-color: lightgray
        }
        .custom-container-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .custom-section-title {
            margin-top: 50px;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
        }
        .custom-btn {
            font-size: 0.85rem;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Título "Views" fora do container de botões -->
            <div class="col-md-6">
                <h2 class="custom-section-title">Views</h2>
                <div class="custom-container-section">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/author'" class="btn btn-primary w-100 custom-btn">View Authors</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/book'" class="btn btn-primary w-100 custom-btn">View Books</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/electronic'" class="btn btn-primary w-100 custom-btn">View Electronics</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/order'" class="btn btn-primary w-100 custom-btn">View Orders</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Título "Add" fora do container de botões -->
            <div class="col-md-6">
                <h2 class="custom-section-title">Add</h2>
                <div class="custom-container-section">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/author/create'" class="btn btn-primary w-100 custom-btn">Add Author</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/product/create'" class="btn btn-primary w-100 custom-btn">Add Product</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/book/create'" class="btn btn-primary w-100 custom-btn">Add Book</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/electronic/create'" class="btn btn-primary w-100 custom-btn">Add Electronic</button>
                        </div>
                        <div class="col-6 mb-2">
                            <button onclick="window.location.href='/client/create'" class="btn btn-primary w-100 custom-btn">Add Client</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center py-4 mt-4">
        <div class="container">
            <p class="mb-0">{{ date('Y') }} © Copyright - Projecto desenvolvido por Miguel Carvalho e Joaquim Falcão.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
