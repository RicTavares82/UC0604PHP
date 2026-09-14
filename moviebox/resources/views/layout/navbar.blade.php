<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand" href="{{route('home')}}">
            <i class="bi bi-film me-2"></i>
            MovieBox
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Abrir navegação"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">
                        <i class="bi bi-house me-1"></i>
                        Início
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('movies.index')}}">
                        <i class="bi bi-camera-reels me-1"></i>
                        Filmes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('authors.index')}}">
                        <i class="bi bi-file-earmark-person"></i>
                        Atores
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('genres.index')}}">
                        <i class="bi bi-tags me-1"></i>
                        Géneros
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
