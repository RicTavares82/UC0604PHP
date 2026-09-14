@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Adicionar Novo Artigo</h1>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="/artigos" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nome do Produto:</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantidade em Stock:</label>
                            <input type="number" name="quantidade" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Preço (€):</label>
                            <input type="number" step="0.01" name="preco" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('artigos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
