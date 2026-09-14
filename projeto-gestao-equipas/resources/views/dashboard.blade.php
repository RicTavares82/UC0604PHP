@extends('template.app.main')

@section('title','Dashboard')
@section('pre-title','Admin')

@section('content')
    <div class="mb-3">
        <label class="form-label">Text</label>
        <input
            type="text"
            class="form-control"
            name="example-text-input"
            placeholder="Input placeholder"
        />
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input
            type="password"
            class="form-control"
            name="example-password-input"
            placeholder="Input placeholder"
        />
    </div>
    <div class="mb-3">
        <label class="form-label">Disabled</label>
        <input
            type="text"
            class="form-control"
            name="example-password-input"
            placeholder="Input placeholder"
            disabled
        />
    </div>
    <div class="mb-3">
        <label class="form-label">Readonly</label>
        <input
            type="text"
            class="form-control"
            name="example-password-input"
            value="Readolny value"
            readonly
        />
    </div>

    <div class="d-flex gap-2 mb-3">
        <x-button class="btn btn-success">
            <x-icon name="add" />
            Adicionar
        </x-button>

        <x-button class="btn btn-warning">
            <x-icon name="edit" />
            Editar
        </x-button>

        <x-button class="btn btn-danger">
            <x-icon name="delete" />
            Apagar
        </x-button>

        <x-button class="btn btn-info text-white">
            <x-icon name="info" />
            Info
        </x-button>

        <x-button class="btn btn-secondary">
            <x-icon name="view" />
            Ver
        </x-button>
    </div>

@endsection
