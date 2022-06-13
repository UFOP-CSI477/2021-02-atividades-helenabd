@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de usuários</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection