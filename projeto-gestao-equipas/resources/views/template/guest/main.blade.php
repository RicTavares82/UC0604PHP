<!DOCTYPE html>
<html lang="pt">

@include('template.guest.parts.head')

<body>
<main class="main" id="top">
    <!-- Menu de topo -->
    @include('template.guest.parts.menu')

    @yield('content')

    @stack('scripts')
</main>
</body>
</html>
