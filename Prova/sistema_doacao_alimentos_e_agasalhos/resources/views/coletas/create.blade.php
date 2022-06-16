@extends('adm')

@section('conteudo')

<form action="{{ route('coletas.store') }}" method="post">
    @csrf

    <div class="my-4">
        <label for="item_id" class="form-label">Item:</label>
        <select name="item_id" id="item_id" class="form-select 
        @error('item_id') 
            is-invalid
        @enderror">
            <option value="" selected disabled>Selecione</option>
            @foreach($items as $item)
            <option value="{{ $item->id }}" @if(old('item_id', -1)==$item->id)
                selected @endif
                >{{ $item->descricao }}</option>
            @endforeach
        </select>
    </div>

    <div class="my-4">
        <label for="entidade_id" class="form-label">Entidade:</label>
        <select name="entidade_id" id="entidade_id" class="form-select 
        @error('entidade_id') 
            is-invalid
        @enderror">
            <option value="" selected disabled>Selecione</option>
            @foreach($entidades as $entidade)
            <option value="{{ $entidade->id }}" @if(old('entidade_id', -1)==$entidade->id)
                selected @endif
                >{{ $entidade->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="my-4">
        <label for="quantidade" class="form-label">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" class="form-control
        @error('quantidade')
            is-invalid
        @enderror" value="{{ old('quantidade') }}">
    </div>

    <div class="my-4">
        <label for="data" class="form-label">Data:</label>
        <input type="date" name="data" id="data" class="form-control
        @error('data')
            is-invalid
        @enderror" value="{{ old('data') }}">
    </div>

    <div class="my-4">
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    </div>
</form>

@endsection