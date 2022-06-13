@extends('adm')

@section('conteudo')

<form action="{{ route('equipamentos.update', $equipamento->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control
        @error('nome')
            is-invalid
        @enderror" value="{{ old('nome', $equipamento) }}">
    </div>

    <div class="my-4">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
        <input type="submit" value="Atualizar" class="btn btn-dark">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection