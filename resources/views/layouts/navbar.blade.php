<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark" id="main-navbar">
    <div class="container-fluid">
        <!-- Logotipos personalizados à esquerda -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/Logo1.png') }}" alt="MississiPy Logo" class="navbar-logo1">
            <img src="{{ asset('images/Logo2.png') }}" alt="MississiPy Logo" class="navbar-logo2">
        </a>

        <!-- Botão de toggler para dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Centralizando o botão de pesquisa -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <div class="navbar-nav"></div>

            <!-- Botão de pesquisa centralizado com ícone e atalho -->
            <div class="d-flex justify-content-center flex-grow-1">
                <button type="button" class="btn btn-outline-light rounded-pill d-flex align-items-center"
                    data-bs-toggle="modal" data-bs-target="#searchModal" style="width: 300px;">
                    <i class="bi bi-search me-2"></i>
                    <span>Search...</span>
                    <span class="ms-auto d-flex align-items-center" style="font-size: 1.2em; padding-left: 10px;">
                        <span id="shortcut-icon" class="bi"></span><span id="key-k" class="bi">K</span>
                    </span>
                </button>
            </div>

            <!-- Opções de Autenticação, Saudação e Dark/Light Mode -->
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Exibe a saudação e Logout se o usuário estiver autenticado -->
                @auth
                    <li class="nav-item me-3 text-light">
                        <span class="text-white">Welcome, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                class="nav-link">
                                Logout
                            </a>
                        </form>
                    </li>
                @else
                    <!-- Exibe Login e Register se o usuário não estiver autenticado -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth

                <!-- Botão para alternar Dark/Light Mode -->
                <li class="nav-item ms-3">
                    <button id="themeToggle" class="btn btn-outline-light">
                        <i id="themeIcon" class="bi bi-moon-fill"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal de Pesquisa -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-custom-position">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="searchModalLabel">Search Products</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <form id="searchForm" action="{{ route('searchBar') }}" method="GET"
                    style="width: 100%; max-width: 600px;">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control form-control-lg bg-light text-dark"
                            placeholder="Type your search query..." required>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para atalhos e alternância de Dark/Light Mode -->
<script>
    let isSearchModalOpen = false;

    document.addEventListener('keydown', function(event) {
        if ((event.metaKey && event.key === 'k') || (event.ctrlKey && event.key === 'k')) {
            event.preventDefault();

            if (isSearchModalOpen) {
                // Redireciona para a página inicial se o modal já está aberto
                window.location.href = "{{ url('/') }}";
                isSearchModalOpen = false;
            } else {
                // Exibe o modal na primeira vez
                const modalElement = document.getElementById('searchModal');
                if (modalElement) {
                    new bootstrap.Modal(modalElement).show();
                    isSearchModalOpen = true;
                }
            }
        }
    });

    // Fechar o modal ao clicar fora ou no botão fechar, redefinindo a variável
    const searchModalElement = document.getElementById('searchModal');
    if (searchModalElement) {
        searchModalElement.addEventListener('hidden.bs.modal', function() {
            isSearchModalOpen = false;
        });
    }

    // Ajuste do ícone de atalho e modo Dark/Light
    const shortcutIcon = document.getElementById('shortcut-icon');
    if (navigator.platform.indexOf('Mac') > -1) {
        shortcutIcon.innerHTML = '<span style="font-family: sans-serif; font-size: 18px;">&#8984;</span>';
    } else if (navigator.platform.indexOf('Win') > -1) {
        shortcutIcon.innerHTML = '<span style="font-family: sans-serif; font-size: 18px;">&#x229E;</span>';
    } else {
        shortcutIcon.innerHTML = '<span style="font-family: sans-serif; font-size: 18px;">Ctrl</span>';
    }
    document.getElementById('key-k').style.fontSize = '19px';

    // Alternância de modo Dark/Light
    const currentTheme = localStorage.getItem('theme') || 'light';
    const themeToggleBtn = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    if (currentTheme === 'dark') {
        document.body.classList.add('dark-mode');
        themeIcon.classList.replace('bi-moon-fill', 'bi-sun-fill');
    }
    themeToggleBtn.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        if (document.body.classList.contains('dark-mode')) {
            themeIcon.classList.replace('bi-moon-fill', 'bi-sun-fill');
            localStorage.setItem('theme', 'dark');
        } else {
            themeIcon.classList.replace('bi-sun-fill', 'bi-moon-fill');
            localStorage.setItem('theme', 'light');
        }
    });
</script>
