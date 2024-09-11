@extends('layouts.main')

@section('content')
    <img width="100px" height="60px" src="{{asset('images/assesement.jpeg')}}" alt="">
    <ul>
        <li><a href="{{ route('route.welcome') }}">Bem Vindo</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a href="{{route('users.all')}}">Todos os Users</a></li>
    </ul>
@endsection
