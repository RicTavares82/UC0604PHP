@extends('layout.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Inventário da Loja</h1>
        <a href="{{ route('artigos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> Novo Artigo
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-striped table-hover m-0">
                <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artigos as $artigo)
                    <tr>
                        <td class="align-middle">{{ $artigo->nome }}</td>
                        <td class="align-middle">{{ $artigo->quantidade }}</td>
                        <td class="align-middle">{{ number_format($artigo->preco, 2, ',', '.') }} €</td>
                        <td class="text-center">
                            <a href="{{ route('artigos.edit', $artigo) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('artigos.destroy', $artigo) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
