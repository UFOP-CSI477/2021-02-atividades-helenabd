@extends('adm')

@section('conteudo')

<h1>Dados do equipamento: {{ $equipamento->nome }}</h1>

<ul>
    <li>Id: {{$equipamento->id}}</li>
    <li>Nome: {{$equipamento->nome}}</li>
    <li>Criação: {{$equipamento->created_at}}</li>
    <li>Última alteração: {{$equipamento->updated_at}}</li>
</ul>
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    <a href="{{route('equipamentos.edit', $equipamento->id)}}" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger" onclick="confirmaExclusao()">Excluir</a>
</div>

<form name="exclusao" action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="post">
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