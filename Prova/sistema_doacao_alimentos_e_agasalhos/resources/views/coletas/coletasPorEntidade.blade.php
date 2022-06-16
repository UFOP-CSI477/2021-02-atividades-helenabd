@extends('app_geral')

@section('conteudo')

<div class="container mb-4">
    <h2>Total geral de doações recebidas</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-success">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Entidade</th>
            <th scope="col">Itens</th>
        </tr>
    </thead>
    <tbody>

        @for($i = 0; $i < $entidades->count(); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$entidades[$i]->nome}}</td>
                <td>{{$totalColetado[$i]}}</td>
            </tr>
            @endfor
            <tr>
                <th scope="row"></th>
                <th>TOTAL GERAL</th>
                <th>{{$geral}}</th>
            </tr>
    </tbody>
</table>

@endsection