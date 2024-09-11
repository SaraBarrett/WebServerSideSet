@extends('layouts.main')

@section('content')
    <h4>{{ $welcome }}</h4>
    <h2>Cursos:</h2>
    <ul>
        @foreach ($cesaeInfo as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <img width="100px" height="60px" src="{{ asset('images/assesement.jpeg') }}" alt="">
    <ul>
        <li><a href="{{ route('route.welcome') }}">Bem Vindo</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Users</a></li>
    </ul>
@endsection
