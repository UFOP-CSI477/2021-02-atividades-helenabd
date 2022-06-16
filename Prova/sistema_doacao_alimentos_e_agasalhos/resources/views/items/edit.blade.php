@extends('adm')

@section('conteudo')

<form action="{{ route('items.update', $item->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="descricao" class="form-label">Nome:</label>
        <input type="text" name="descricao" id="descricao" class="form-control
        @error('descricao')
            is-invalid
        @enderror" value="{{ old('descricao', $item) }}">
    </div>

    <div class="my-4">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
        <input type="submit" value="Atualizar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection