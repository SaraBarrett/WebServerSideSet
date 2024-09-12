@extends('layouts.main')
@section('content')
    <h1>User: {{ $user->name }} </h1>
    <h5>Email: {{ $user->email }}</h5>
    <h5>Endereço: {{ $user->address }}</h5>
    <h5>Telefone: {{ $user->phone }}</h5>
@endsection
