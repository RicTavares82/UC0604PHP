@extends('template.guest.main')

@push('styles')
    <style>
        .login-image {
            background-image: url('{{asset('imgs/login.png')}}');
            background-size: cover;
            background-position: center;
        }
        .login-form {
            max-width: 500px;
            min-width:400px;
            margin: auto;
        }
    </style>
@endpush



@section('content')
    <div class="container-fluid min-vh-100 d-flex">
        <div class="row flex-grow-1 w-100">

            <!-- Coluna da Imagem -->
            <div class="col-md-6 d-none d-md-block login-image"></div>

            <!-- Coluna do Formulário -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form p-4">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @error('msg') {{$message}} @enderror

                            <ul>


                                {{--
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                --}}
                            </ul>
                        </div>
                    @endif

                    <h2 class="mb-4 text-center">Iniciar Sessão</h2>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Endereço de Email</label>
                            <input  class="form-control" id="email" name="email" value="{{old('email','')}}" autofocus >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Palavra-passe</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mb-3">Entrar</button>
                        <a class="btn btn-info w-100 mb-3" href="#">Login como Admin</a>
                        <a class="btn btn-warning w-100 mb-3" href="#">Login como Treinador</a>
                        <a class="btn btn-danger w-100 mb-3" href="#">Login como Atleta</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
