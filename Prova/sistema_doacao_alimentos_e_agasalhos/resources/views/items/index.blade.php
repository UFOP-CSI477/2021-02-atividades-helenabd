@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de Itens</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-success">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a href="{{ route('items.show', $item->id) }}">{{$item->descricao}}</a></td>
            <td class="d-flex">
                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                <span class="px-2"></span>
                <form name="exclusao" action="{{ route('items.destroy', $item->id) }}" method="post" onsubmit="return confirm('Deseja realmente excluir este item?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('items.create') }}">Incluir</a>

@endsection