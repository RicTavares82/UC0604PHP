@extends('layout.main')

@section('content')

    <!-- Boas-vindas -->
    <section class="hero shadow-sm p-5 mb-5 bg-white rounded">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-dark mb-3">
                    Gestão de Stock
                </span>
                <h1 class="display-5 fw-semibold mb-3">
                    Bem-vindo à Gestão de Loja
                </h1>
                <p class="lead text-secondary mb-4">
                    Uma aplicação simples para organizar o inventário e artigos.
                </p>
                <p class="text-secondary mb-4">
                    Consulta a coleção, adiciona novos produtos, atualiza informações de stock e organiza os registos de forma rápida e intuitiva.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('artigos.index') }}" class="btn btn-dark">
                        <i class="bi bi-box-seam me-2"></i>
                        Ver Artigos
                    </a>
                    <a href="{{ route('artigos.create') }}" class="btn btn-outline-dark">
                        <i class="bi bi-plus-circle me-2"></i>
                        Adicionar Artigo
                    </a>
                </div>
            </div>

            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <i class="bi bi-shop" style="font-size: 8rem; color: #343a40;"></i>
            </div>
        </div>
    </section>

    <!-- Acessos rápidos -->
    <div class="row g-4">
        <!-- Artigos -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="feature-icon bg-dark text-white mb-3 d-inline-flex p-3 rounded">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                    <h2 class="h4">Artigos</h2>
                    <p class="text-secondary">
                        Consulta todos os artigos disponíveis, ver os detalhes de stock e fazer a gestão do inventário.
                    </p>
                    <a href="{{ route('artigos.index') }}" class="btn btn-outline-dark">
                        Ver Inventário
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Adicionar Novo -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="feature-icon bg-dark text-white mb-3 d-inline-flex p-3 rounded">
                        <i class="bi bi-plus-circle fs-4"></i>
                    </div>
                    <h2 class="h4">Novo Artigo</h2>
                    <p class="text-secondary">
                        Regista um novo produto no sistema para manter as quantidades e os preços sempre atualizados.
                    </p>
                    <a href="{{ route('artigos.create') }}" class="btn btn-outline-dark">
                        Inserir Artigo
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
