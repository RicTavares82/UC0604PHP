@extends('template.app.main')

@section('title','Página de teste')
@section('pre-title','Componentes Blade')
@push('styles')
    <style>
        .my_button{
            border-top-color: red !important;
        }
    </style>

@endpush

@php
$xpto=99;
$lista=[1,2,3];
@endphp
@section('content')

    <x-simple_button class="btn-primary" name="Joaquim Iscas">
        Um botão
    </x-simple_button>
    <x-simple_button>
        outro botão
    </x-simple_button>
    <x-simple_button :value="$xpto">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
       99
    </x-simple_button>
    <x-simple_button>Último botão</x-simple_button>
    <x-alert  type="info" class="border-3">
        Uma mensagem
        <p>{{$xpto}}</p>
        <x-simple_button>
            outro botão
        </x-simple_button>
    </x-alert>

    <x-alert  type="info" class="border-3">
        Uma mensagem
    </x-alert>
    <x-alert  type="warning" class="border-2">
        Uma mensagem de warning
    </x-alert>
    <x-alert  type="danger" >
        Uma mensagem de danger
    </x-alert>

@endsection


