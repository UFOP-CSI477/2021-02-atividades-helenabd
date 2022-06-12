@extends('adm')

@section('conteudo')

<h1>Relatório por equipamento</h1>

<form action="{{ route('registros.showByEquipamento') }}" method="post">
    @csrf
    @method('GET')

    <div class="my-4">
        <label for="equipamento_id" class="form-label">Equipamento:</label>
        <select name="equipamento_id" id="equipamento_id" class="form-select 
        @error('equipamento_id') 
            is-invalid
        @enderror">
            <option value="">Selecione um equipamento</option>
            @foreach($equipamentos as $equipamento)
            <option value="{{ $equipamento->id }}" @if(old('equipamento_id', -1)==$equipamento->id)
                selected @endif
                >{{ $equipamento->nome }}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" class="btn btn-dark" value="Buscar">
</form>

@endsection