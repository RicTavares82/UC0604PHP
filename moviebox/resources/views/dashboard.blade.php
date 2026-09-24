@extends('layout.main')

@section('content')
        <h1>Dashboard</h1>
    @role('admin')
        <h2>Sou um ADMIN</h2>
    @endrole
    @role('editor')
        <h2>Sou um EDITOR</h2>
    @endrole
    @role('user')
        <h2>Sou um USER</h2>
    @endrole

@endsection
