@extends('layouts.main')
@section('content')
    <h1>Olá, aqui vais ver uma lista de tarefas! </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Descrição</th>
                <th scope="col">Responsável</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->usname }}</td>
                    <td><a  href="{{route('tasks.view', $item->id)}}" class="btn btn-info">Ver/editar</a></td>
                    <td><a  href="{{route('tasks.delete', $item->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
