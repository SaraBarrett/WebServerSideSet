@extends('layouts.main')
@section('content')
    <h1>Olá, aqui vais poder adicionar users!</h1>
    <form method="POST" action="{{ route('user.create') }}">
        @csrf
        <input type="text" value="" name="email" id="">

        <button type="submit">Submeter</button>
    </form>
@endsection
