@extends('adm')

@section('conteudo')

<form action="{{ route('equipamentos.store') }}" method="post">
    @csrf

    <div>
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control
        @error('nome')
            is-invalid
        @enderror" value="{{ old('nome') }}">
    </div>

    <div class="my-4">
        <input type="submit" value="Cadastrar" class="btn btn-dark">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection