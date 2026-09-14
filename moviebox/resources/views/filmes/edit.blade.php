@extends('layout.main')

@section('content')

    <div class="container py-4">

        <div class="mb-4">

            <h1 class="h3 mb-1">Editar Filme</h1>

            <p class="text-secondary mb-0">
                Alterar os dados do filme.
            </p>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <form action="#" method="POST">

                    <div class="mb-3">

                        <label for="title" class="form-label">
                            Título
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            value="Interstellar"
                        >

                    </div>


                    <div class="mb-3">

                        <label for="director" class="form-label">
                            Realizador
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="director"
                            name="director"
                            value="Christopher Nolan"
                        >

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="year" class="form-label">
                                Ano
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                id="year"
                                name="year"
                                value="2014"
                            >

                        </div>


                        <div class="col-md-6 mb-3">

                            <label for="duration" class="form-label">
                                Duração
                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    class="form-control"
                                    id="duration"
                                    name="duration"
                                    value="169"
                                >

                                <span class="input-group-text">
                                    min
                                </span>

                            </div>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label for="genre_id" class="form-label">
                            Género
                        </label>

                        <select
                            class="form-select"
                            id="genre_id"
                            name="genre_id"
                        >

                            <option value="1">Ação</option>
                            <option value="2">Comédia</option>
                            <option value="3">Drama</option>
                            <option value="4" selected>Ficção Científica</option>
                            <option value="5">Terror</option>
                            <option value="6">Animação</option>

                        </select>

                    </div>


                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i>
                        Guardar Alterações
                    </button>

                    <a href="#" class="btn btn-outline-secondary">
                        Cancelar
                    </a>

                </form>

            </div>

        </div>

    </div>

@endsection
