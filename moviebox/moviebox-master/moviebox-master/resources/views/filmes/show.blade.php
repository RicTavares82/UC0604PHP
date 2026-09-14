<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MovieBox - Detalhe do Filme</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        main {
            flex: 1;
        }

        .navbar-brand {
            font-weight: 600;
            letter-spacing: .5px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand" href="index.html">
            <i class="bi bi-film me-2"></i>
            MovieBox
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.html">Início</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="movies.html">Filmes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="genres.html">Géneros</a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<main>

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="h3 mb-1">
                    Interstellar
                </h1>

                <p class="text-secondary mb-0">
                    Detalhes do filme.
                </p>
            </div>

            <div>

                <a href="movies-edit.html" class="btn btn-primary">
                    <i class="bi bi-pencil me-1"></i>
                    Editar
                </a>

                <a href="movies.html" class="btn btn-outline-secondary">
                    Voltar
                </a>

            </div>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <dl class="row mb-0">

                    <dt class="col-sm-3">
                        Título
                    </dt>

                    <dd class="col-sm-9">
                        Interstellar
                    </dd>


                    <dt class="col-sm-3">
                        Realizador
                    </dt>

                    <dd class="col-sm-9">
                        Christopher Nolan
                    </dd>


                    <dt class="col-sm-3">
                        Género
                    </dt>

                    <dd class="col-sm-9">
                        Ficção Científica
                    </dd>


                    <dt class="col-sm-3">
                        Ano
                    </dt>

                    <dd class="col-sm-9">
                        2014
                    </dd>


                    <dt class="col-sm-3">
                        Duração
                    </dt>

                    <dd class="col-sm-9">
                        169 minutos
                    </dd>

                </dl>

            </div>

        </div>

    </div>

</main>


<footer class="bg-white border-top py-3">

    <div class="container">

        <div class="d-flex justify-content-between">

                <span class="text-secondary small">
                    MovieBox
                </span>

            <span class="text-secondary small">
                    MiniProjeto Laravel
                </span>

        </div>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
