<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MovieBox</title>

    @vite(['resources/sass/app.scss','resources/js/app.js',])


</head>

<body>

<!-- Navbar -->
@include('layout.navbar')


<!-- Conteúdo principal -->
<main>


    <div class="container py-5">

        @session('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso: </strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endsession
        @session('warning')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Atenção! </strong>{{session('warning')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endsession


        @yield('content')

    </div>


</main>


<!-- Footer -->
@include('layout.footer')

</body>

</html>
