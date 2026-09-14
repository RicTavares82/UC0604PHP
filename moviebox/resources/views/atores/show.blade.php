@extends('layout.main')

@section('content')
    <h2>{{$author->name}}</h2>
    <h1>Movie Name: {{$movie->title}}</h1>
    <ul>
        @foreach($movie->actors as $actor)
            <li>{{$actor->name}}</li>
        @endforeach
    </ul>
@endsection
