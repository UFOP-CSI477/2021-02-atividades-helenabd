@extends('adm')

@section('conteudo')

<form action="{{ route('registros.update', $registro->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="my-4">
        <label for="equipamento_id" class="form-label">Equipamento:</label>
        <select name="equipamento_id" id="equipamento_id" class="form-select 
        @error('equipamento_id') 
            is-invalid
        @enderror">
            <option value="" selected disabled>Selecione</option>
            @foreach($equipamentos as $equipamento)
            <option value="{{ $equipamento->id }}" @if(old('equipamento_id', $registro)==$equipamento->id)
                selected @endif
                >{{ $equipamento->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="my-4">
        <label for="users_id" class="form-label">Usuário:</label>
        <select name="users_id" id="users_id" class="form-select 
        @error('users_id') 
            is-invalid
        @enderror">
            <option value="" selected disabled>Selecione</option>
            @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" @if(old('users_id', $registro)==$usuario->id)
                selected @endif
                >{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="my-4">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control
        @error('descricao')
            is-invalid
        @enderror" value="{{ old('descricao', $registro) }}">
    </div>

    <div class="my-4">
        <label for="datalimite" class="form-label">Data Limite:</label>
        <input type="date" name="datalimite" id="datalimite" class="form-control
        @error('datalimite')
            is-invalid
        @enderror" value="{{ old('datalimite', $registro) }}">
    </div>

    <div class="my-4">
        <label for="tipo" class="form-label">Tipo(1 - Preventiva / 2 - Corretiva / 3 - Urgente):</label>
        <select name="tipo" id="tipo" class="form-control
        @error('tipo')
            is-invalid
        @enderror">
            <option value="" selected disabled>Selecione:</option>
            <option value="1" @if(old('tipo', $registro)==1) selected @endif>Preventiva</option>
            <option value="2" @if(old('tipo', $registro)==2) selected @endif>Corretiva</option>
            <option value="3" @if(old('tipo', $registro)==3) selected @endif>Urgente</option>
        </select>
    </div>

    <div class="my-4">
        <input type="submit" value="Atualizar" class="btn btn-dark">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    </div>
</form>

@endsection