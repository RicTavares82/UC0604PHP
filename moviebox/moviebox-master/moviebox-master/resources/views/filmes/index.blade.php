@extends('layout.main')

@section('content')

        <div class="page-header d-flex justify-content-between align-items-center">

            <div>
                <h1 class="h3 mb-1">
                    Filmes
                </h1>

                <p class="text-secondary mb-0">
                    Lista de filmes registados.
                </p>
            </div>

            <a href="movies-create.html" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Novo Filme
            </a>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>
                        <tr>
                            <th>Título</th>
                            <th>Realizador</th>
                            <th>Género</th>
                            <th>Ano</th>
                            <th>Duração</th>
                            <th class="text-end table-actions">Ações</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>Interstellar</td>
                            <td>Christopher Nolan</td>
                            <td>Ficção Científica</td>
                            <td>2014</td>
                            <td>169 min</td>
                            <td class="text-end table-actions">

                                <a
                                    href="movies-show.html"
                                    class="btn btn-sm btn-outline-secondary"
                                >
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a
                                    href="movies-edit.html"
                                    class="btn btn-sm btn-outline-primary"
                                >
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>

                        <tr>
                            <td>Gladiator</td>
                            <td>Ridley Scott</td>
                            <td>Ação</td>
                            <td>2000</td>
                            <td>155 min</td>
                            <td class="text-end table-actions">

                                <a
                                    href="movies-show.html"
                                    class="btn btn-sm btn-outline-secondary"
                                >
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a
                                    href="movies-edit.html"
                                    class="btn btn-sm btn-outline-primary"
                                >
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>

                        <tr>
                            <td>Toy Story</td>
                            <td>John Lasseter</td>
                            <td>Animação</td>
                            <td>1995</td>
                            <td>81 min</td>
                            <td class="text-end table-actions">

                                <a
                                    href="movies-show.html"
                                    class="btn btn-sm btn-outline-secondary"
                                >
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a
                                    href="movies-edit.html"
                                    class="btn btn-sm btn-outline-primary"
                                >
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-danger"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


@endsection
