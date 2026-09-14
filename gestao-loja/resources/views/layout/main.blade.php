<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Loja</title>
    <!-- Importação do CSS do Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Importação dos Ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<!-- Barra de navegação simples -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Gestão de Loja</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/artigos">Artigos</a>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Área onde o conteúdo das outras páginas será inserido -->
    @yield('content')
</div>
</body>
</html>
