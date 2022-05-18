<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href=" {{route('principal')}} " class="navbar-brand logo">
                SisVen
            </a>
            <ul class="nav">
                <li class="nav-item"><a href="{{route('principal')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/estados" class="nav-link">Estados</a></li>
                <li class="nav-item"><a href="/cidades" class="nav-link">Cidades</a></li>
                <li class="nav-item"><a href="{{route('products.index')}}" class="nav-link">Produtos</a></li>
            </ul>
        </nav>

        <!-- CONTEUDO DA PAGINA -->
        @yield('conteudo')
    </div>

</body>

</html>