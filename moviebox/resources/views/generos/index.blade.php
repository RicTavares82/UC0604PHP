@extends('layout.main')

@section('content')



        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h1 class="h3 mb-1">
                    Géneros
                </h1>

                <p class="text-secondary mb-0">
                    Lista de géneros disponíveis.
                </p>

            </div>

            <a href="{{route('genres.create')}}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Novo Género
            </a>

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th class="text-end table-actions">Ações</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($genres as $g)
                            <tr>
                                <td>{{$g->id}}</td>
                                <td>{{$g->name}}</td>

                                <td class="text-end table-actions">

                                    <a
                                        href="{{route('genres.edit',$g)}}"
                                        class="btn btn-sm btn-outline-primary"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{route('genres.destroy',$g)}}" method="POST" style="display: contents;">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>



                                </td>
                            </tr>
                        @endforeach





                        </tbody>

                    </table>

                </div>

            </div>

        </div>


@endsection
