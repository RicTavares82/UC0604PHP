
@extends('template.guest.main')

@section('content')
    <!-- Secção de introdução com duas colunas -->
    <section class="pb-5 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 order-md-1">
                    <img class="img-fluid" src="{{ asset('imgs/home1.png') }}" alt="Imagem do projeto" />
                </div>
                <div class="col-md-7 col-lg-6 mt-5 mt-md-0 text-center text-md-start">
                    <h1>Bem-vindo à Plataforma de Gestão de Equipas</h1>
                    <p class="lead">Esta aplicação permite gerir atletas, equipas e projetos desportivos de forma centralizada, moderna e intuitiva.</p>
                    <a class="btn btn-primary btn-lg mt-3" href="#">Regista-te</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção de estatísticas -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">

                <!-- Card Atletas -->
                <div class="col-md-6">
                    <div class="card shadow-sm text-center p-4">
                        <div class="card-body">
                            <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <i class="fa-solid fa-person-walking fa-2x"></i>
                            </div>
                            <h3 class="fw-bold">152</h3>
                            <p class="mb-0">Atletas</p>
                        </div>
                    </div>
                </div>

                <!-- Card Equipas -->
                <div class="col-md-6">
                    <div class="card shadow-sm text-center p-4">
                        <div class="card-body">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <i class="fa-solid fa-people-group fa-2x"></i>
                            </div>
                            <h3 class="fw-bold">12</h3>
                            <p class="mb-0">Equipas</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
