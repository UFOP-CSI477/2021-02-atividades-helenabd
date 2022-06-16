@extends('adm')

@section('conteudo')

<form action="{{ route('items.store') }}" method="post">
    @csrf

    <div>
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" name="descricao" id="descricao" class="form-control
        @error('descricao')
            is-invalid
        @enderror" value="{{ old('descricao') }}">
    </div>

    <div class="my-4">
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection