@extends('adm')

@section('conteudo')

<h1>Dados da manutenção:</h1>

<ul>
    <li>Id: {{$registro->id}}</li>
    <li>Equipamento: {{$registro->equipamento->nome}}</li>
    <li>Usuário: {{$registro->users->name}}</li>
    <li>Descrição: {{$registro->descricao}}</li>
    <li>Data Limite: {{date("d/m/Y", strtotime($registro->datalimite))}}</li>
    <li>Tipo: @if($registro->tipo == 1) Preventiva
        @elseif($registro->tipo == 2) Corretiva
        @elseif($registro->tipo == 3) Urgente
        @endif</li>
    <li>Criação: {{$registro->created_at}}</li>
    <li>Última alteração: {{$registro->updated_at}}</li>
</ul>
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    <a href="{{route('registros.edit', $registro->id)}}" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger" onclick="confirmaExclusao()">Excluir</a>
</div>

<form name="exclusao" action="{{ route('registros.destroy', $registro->id) }}" method="post">
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