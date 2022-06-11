@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de equipamentos</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipamentos as $equipamento)
        <tr>
            <th scope="row">{{$equipamento->id}}</th>
            <td><a href="{{ route('equipamentos.show', $equipamento->id) }}">{{$equipamento->nome}}</a></td>
            <td class="d-flex">
                <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn btn-warning">Editar</a>
                <span class="px-2"></span>
                <form name="exclusao" action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="post" onsubmit="return confirm('Deseja realmente excluir este equipamento?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<a class="btn btn-dark" href="{{ route('equipamentos.create') }}">Incluir</a>

@endsection