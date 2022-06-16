@extends('adm')

@section('conteudo')

<h1>Dados do item: {{ $item->nome }}</h1>

<ul>
    <li>Id: {{$item->id}}</li>
    <li>Descrição: {{$item->descricao}}</li>
    <li>Criação: {{$item->created_at}}</li>
    <li>Última alteração: {{$item->updated_at}}</li>
</ul>
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    <a href="{{route('items.edit', $item->id)}}" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger" onclick="confirmaExclusao()">Excluir</a>
</div>

<form name="exclusao" action="{{ route('items.destroy', $item->id) }}" method="post">
    @csrf
    @method('DELETE')
</form>

<script>
    function confirmaExclusao() {
        if (confirm('Deseja realmente excluir este estado?')) {
            document.exclusao.submit();
        }
    }
</script>

@endsection