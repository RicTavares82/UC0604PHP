@extends('layout.main')

@section('content')

    <div class="mb-4">

        <h1 class="h3 mb-1">
            Novo Género
        </h1>

        <p class="text-secondary mb-0">
            Registar um novo género.
        </p>

    </div>

    {{--Resumo dos erros--}}

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Existem Erros no formulário</strong>
            {{--
           <ul class="mb-0 mt-2">

               @foreach($errors->all() as $msg)
                   <li>{{$msg}}</li>
               @endforeach
           </ul>
           --}}
        </div>
    @endif

    <div class="card shadow-sm">

        <div class="card-body">

            <form action="{{route('genres.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label"> Nome </label>
                    <input placeholder="Inserir Genero" value="{{old('name')}}" type="text"
                           class="form-control @error('name') is-invalid @enderror " id="name" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg me-1"></i>
                    Guardar
                </button>
                <a href="{{route('genres.index')}}" class="btn btn-outline-secondary"> Cancelar </a>
            </form>

        </div>

    </div>

@endsection


