<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <!-- Logo à esquerda -->
        <a class="navbar-brand" aria-current="page" href="{{ url('/') }}">
            <img src="https://banner2.cleanpng.com/20180501/abw/avdegic5l.webp" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            MississiPy
        </a>

        <!-- Botão de toggler para dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Centralizando o botão de pesquisa -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <!-- Parte esquerda vazia (para centralizar o botão) -->
            <div class="navbar-nav"></div>

            <!-- Botão de pesquisa centralizado com ícone à esquerda -->
            <div class="d-flex justify-content-center flex-grow-1">
                <a class="btn btn-outline-light rounded-pill d-flex align-items-center justify-content-start" href="{{ route('searchBar') }}" role="button" style="width: 300px;">
                    <i class="bi bi-search me-2"></i> <!-- Ícone de lupa à esquerda com margem -->
                    <span>Search...</span>
                </a>
            </div>

            <!-- Parte direita com Login, Register, Checkout, Logout -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('checkout') }}">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
