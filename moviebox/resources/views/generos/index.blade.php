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
            @role('admin')
                <a href="{{route('admin.genres.create')}}" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i>
                    Novo Género
                </a>
            @endrole

        </div>


        <div class="card shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            @hasanyrole('admin|editor')
                            <th class="text-end table-actions">Ações</th>
                            @endhasanyrole

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($genres as $g)
                            <tr @if($g->trashed()) class="bg-warning" @endif>
                                <td>{{$g->id}}</td>
                                <td>{{$g->name}}</td>
                                @hasanyrole('admin|editor')
                                <td class="text-end table-actions">
                                    <a href="{{route($area.'.genres.edit',$g)}}" class="btn btn-sm btn-outline-primary" >
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    @role('admin')

                                    <form action="{{route('admin.genres.destroy',$g)}}" method="POST" style="display: contents;">
                                        @csrf
                                        @method('DELETE')
                                        @if($g->trashed())
                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                            >
                                                <i class="bi bi-file-earmark-x"></i>
                                            </button>

                                        @else
                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-warning"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        @endif

                                    </form>
                                    @endrole


                                </td>
                                @endhasanyrole
                            </tr>
                        @endforeach





                        </tbody>

                    </table>

                </div>

            </div>

        </div>


@endsection
