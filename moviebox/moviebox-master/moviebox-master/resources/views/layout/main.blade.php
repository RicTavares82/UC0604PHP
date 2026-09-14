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


        @yield('content')

    </div>

</main>


<!-- Footer -->
@include('layout.footer')

</body>

</html>
