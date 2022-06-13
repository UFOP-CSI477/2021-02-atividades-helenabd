@extends('geral')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de equipamentos</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipamentos as $equipamento)
        <tr>
            <th scope="row">{{$equipamento->id}}</th>
            <td>{{$equipamento->nome}}</td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection