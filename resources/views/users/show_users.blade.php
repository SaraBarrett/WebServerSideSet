@extends('layouts.main')
@section('content')
    <h5>O gestor pedagógico da turma é o {{ $myUser->name }} e o email dele é {{ $myUser->email }}</h5>
    <h1>Olá, aqui vais ver uma lista de users! </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td><a  href="{{route('users.view', $user->id)}}" class="btn btn-info">Ver/editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
