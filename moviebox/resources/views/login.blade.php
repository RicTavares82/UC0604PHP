@extends('layout.main')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-7 col-lg-5">

            <div class="text-center mb-4">

                <i class="bi bi-film display-3"></i>

                <h1 class="h3 mt-3 mb-1">
                    Iniciar Sessão
                </h1>

                <p class="text-secondary">
                    Entre na sua conta MovieBox.
                </p>

            </div>


            @if ($errors->any())

                <div class="alert alert-danger">
                    <strong>Não foi possível iniciar sessão.</strong>
                </div>

            @endif


            <div class="card shadow-sm">

                <div class="card-body p-4">

                    <form
                        action="{{route('login')}}"
                        method="POST"
                    >

                        @csrf


                        <div class="mb-3">

                            <label
                                for="email"
                                class="form-label"
                            >
                                Email
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    autofocus
                                >

                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>


                        <div class="mb-3">

                            <label
                                for="password"
                                class="form-label"
                            >
                                Palavra-passe
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                >

                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>


                        <div class="form-check mb-4">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="remember"
                                name="remember"
                                value="1"
                            >

                            <label
                                class="form-check-label"
                                for="remember"
                            >
                                Lembrar-me
                            </label>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-dark w-100"
                        >
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Entrar
                        </button>

                    </form>
                    <a
                        href="{{route('login.fast','1')}}"
                        class="btn btn-warning w-100 mt-1"
                    >
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login Admin
                    </a>
                    <a
                        href="{{route('login.fast','2')}}"
                        class="btn btn-success w-100 mt-1"
                    >
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login Editor
                    </a>
                    <a
                        href="{{route('login.fast','3')}}"
                        class="btn btn-danger w-100 mt-1"
                    >
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login User
                    </a>

                </div>

            </div>

        </div>

    </div>

@endsection
