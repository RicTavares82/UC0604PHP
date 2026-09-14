<html lang="en">
@include('template.app.parts.head')
<body class="theme-light">

<div class="page">
    <!-- Sidebar -->
@include('template.app.parts.sidebar')

    <!-- Navbar -->
    @include('template.app.parts.navbar')


    <div class="page-wrapper">
        <!-- Page header -->
        @include('template.app.parts.header')

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
              @yield('content')
            </div>
        </div>
        <!-- Footer -->
        @include('template.app.parts.footer')

    </div>
</div>
@stack('scripts')
</body>
</html>
