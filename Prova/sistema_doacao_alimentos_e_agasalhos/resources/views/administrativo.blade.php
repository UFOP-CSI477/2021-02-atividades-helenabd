@extends('adm')

@section('conteudo')

<h1>Olá, {{ Auth::user()->name }}!</h1>

<h2>Você está na Área Administrativa</h2>

<div class="mt-2">
    <h5>Você pode realizar as seguintes atividades:</h5>
</div>

<ul>
    <li>CRUD Itens</li>
    <li>CRUD Entidades</li>
    <li>CRUD Coletas</li>
</ul>

@endsection