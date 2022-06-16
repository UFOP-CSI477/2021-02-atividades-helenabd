@extends('app_geral')

@section('conteudo')

<div class="container mb-4">
    <h2>Total de itens recebidos</h2>
</div>

<table class="table table-striped table-hover">
    <thead class="table-success">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Quantidade</th>
        </tr>
    </thead>
    <tbody>

        @for($i = 0; $i < $items->count(); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$items[$i]->descricao}}</td>
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