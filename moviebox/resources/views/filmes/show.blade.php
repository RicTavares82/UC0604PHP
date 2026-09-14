@extends('layout.main')

@section('content')

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="h3 mb-1">{{$movie->title}}</h1>

                <p class="text-secondary mb-0">
                    Detalhes do filme.
                </p>
            </div>

            <div>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-pencil me-1"></i>
                    Editar
                </a>

                <a href="#" class="btn btn-outline-secondary">
                    Voltar
                </a>
            </div>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <dl class="row mb-0">

                    <dt class="col-sm-3">Título</dt>
                    <dd class="col-sm-9">{{$movie->title}}</dd>

                    <dt class="col-sm-3">Realizador</dt>
                    <dd class="col-sm-9">{{$movie->director}}</dd>

                    <dt class="col-sm-3">Género</dt>
                    <dd class="col-sm-9">Ficção Científica</dd>

                    <dt class="col-sm-3">Ano</dt>
                    <dd class="col-sm-9">2014</dd>

                    <dt class="col-sm-3">Duração</dt>
                    <dd class="col-sm-9">169 minutos</dd>

                </dl>

            </div>

        </div>

    </div>

@endsection
