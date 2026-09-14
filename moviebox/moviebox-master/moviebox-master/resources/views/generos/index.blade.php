@extends('layout.main')

@section('content')



        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h1 class="h3 mb-1">
                    Géneros
                </h1>

                <p class="text-secondary mb-0">
                    Lista de géneros disponíveis.
                </p>

            </div>

            <a href="genres-create.html" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Novo Género
            </a>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-end table-actions">Ações</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>Ação</td>

                            <td class="text-end table-actions">

                                <a
                                    href="genres-edit.html"
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
                            <td>Comédia</td>

                            <td class="text-end table-actions">

                                <a
                                    href="genres-edit.html"
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
                            <td>Drama</td>

                            <td class="text-end table-actions">

                                <a
                                    href="genres-edit.html"
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
                            <td>Ficção Científica</td>

                            <td class="text-end table-actions">

                                <a
                                    href="genres-edit.html"
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
