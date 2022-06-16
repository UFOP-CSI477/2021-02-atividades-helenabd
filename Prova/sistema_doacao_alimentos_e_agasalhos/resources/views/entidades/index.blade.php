@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de entidades</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-success">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entidades as $entidade)
        <tr>
            <th scope="row">{{$entidade->id}}</th>
            <td><a href="{{ route('entidades.show', $entidade->id) }}">{{$entidade->nome}}</a></td>
            <td>{{$entidade->bairro}}</td>
            <td>{{$entidade->cidade}}</td>
            <td>{{$entidade->estado}}</td>
            <td class="d-flex">
                <a href="{{ route('entidades.edit', $entidade->id) }}" class="btn btn-warning">Editar</a>
                <span class="px-2"></span>
                <form name="exclusao" action="{{ route('entidades.destroy', $entidade->id) }}" method="post" onsubmit="return confirm('Deseja realmente excluir esta entidade?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('entidades.create') }}">Incluir</a>

@endsection