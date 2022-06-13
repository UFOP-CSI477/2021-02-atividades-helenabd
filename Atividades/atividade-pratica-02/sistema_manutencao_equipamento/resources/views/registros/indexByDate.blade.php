@extends('geral')

@section('conteudo')

<div class="container mb-4">
    <h2>Relatório de manutenções</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Data Limite</th>
            <th scope="col">Equipamento</th>
            <th scope="col">Usuário</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td>{{date("d/m/Y", strtotime($registro->datalimite))}}</td>
            <td>{{$registro->equipamento->nome}}</td>
            <td>{{$registro->users->name }}</td>
            <td>@if($registro->tipo == 1) Preventiva
                @elseif($registro->tipo == 2) Corretiva
                @elseif($registro->tipo == 3) Urgente
                @endif
            </td>
            <td>{{$registro->descricao}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection