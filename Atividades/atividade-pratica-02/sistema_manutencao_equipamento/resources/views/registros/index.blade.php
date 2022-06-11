@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de manutenções</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Equipamento</th>
            <th scope="col">Usuário</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data Limite</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
            <td><a href="{{ route('registros.show', $registro->id) }}">{{$registro->equipamento->nome}}</a></td>
            <td>{{$registro->users->name }}</td>
            <td>{{$registro->descricao}}</td>
            <td>{{date("d/m/Y", strtotime($registro->datalimite))}}</td>
            <td>@if($registro->tipo == 1) Preventiva
                @elseif($registro->tipo == 2) Corretiva
                @elseif($registro->tipo == 3) Urgente
                @endif
            </td>
            <td class="d-flex">
                <a href="{{ route('registros.edit', $registro->id) }}" class="btn btn-warning">Editar</a>
                <span class="px-2"></span>
                <form name="exclusao" action="{{ route('registros.destroy', $registro->id) }}" method="post" onsubmit="return confirm('Deseja realmente excluir este equipamento?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-dark" href="{{ route('registros.create') }}">Incluir</a>

@endsection