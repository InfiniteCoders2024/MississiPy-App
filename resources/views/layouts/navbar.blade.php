<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <!-- Logo à esquerda -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('https://banner2.cleanpng.com/20180501/abw/avdegic5l.webp') }}" alt="MississiPy Logo"
                width="30" height="30" class="d-inline-block align-text-top me-2">
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
                <a class="btn btn-outline-light rounded-pill d-flex align-items-center justify-content-start"
                    href="{{ route('searchBar') }}" role="button" style="width: 300px;">
                    <i class="bi bi-search me-2"></i> <!-- Ícone de lupa à esquerda com margem -->
                    <span>Search...</span>
                </a>
            </div>

            <!-- Menu à direita -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('checkout') }}">
                            <i class="bi bi-cart3 me-1"></i>Checkout
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
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
