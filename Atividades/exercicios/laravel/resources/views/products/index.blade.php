@extends('app')

@section('conteudo')

<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Um</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->um}}</td>
        </tr>
        @endforeach
</table>

@endsection