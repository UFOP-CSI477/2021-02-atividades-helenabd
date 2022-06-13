<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- Opções -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <i class="bi bi-wrench-adjustable-circle-fill" style="font-size: 3rem;"></i>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('welcome') }}" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="{{ route('administrativo') }}" class="nav-link px-2 link-dark">Área Administrativa</a></li>
                <li><a href="{{ route('servicos') }}" class="nav-link px-2 link-dark">Área de Serviços</a></li>
            </ul>

            <div class="col-md-3 text-end">
                @if (Auth::check())
                <!-- Logged -->
                {{ Auth::user()->name }}
                <!-- Logout -->
                <form action=" {{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary">Logout</button>
                </form>
                @else
                <!-- Login -->
                <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Login</a>
                <a href=" {{ route('register') }}" class="btn btn-dark">Sign-up</a>
                @endif
            </div>
        </header>
    </div>

    <!-- CONTEUDO DA PAGINA -->
    <div id="content" class="container">
        <h1>Olá, mundo!</h1>

        <h2>Você está no {{ env('APP_NAME') }}</h2>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Nostrum est iste animi molestias commodi odio facilis eius ipsam saepe cupiditate,
            earum iure dolore quis quasi ea vitae aperiam sequi illo.</p>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Nostrum est iste animi molestias commodi odio facilis eius ipsam saepe cupiditate,
            earum iure dolore quis quasi ea vitae aperiam sequi illo.</p>

    </div>

    <!-- Rodape -->
    <!-- Adapted from: https://getbootstrap.com/docs/5.1/examples/footers/ -->
    <div class="container">
        <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <!-- https://laravel.com/docs/9.x/blade#displaying-unescaped-data -->
                <span class="text-center text-muted">Sistema de Manutenção de Equipamentos</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a href="https://github.com/helenabd" target="_blank"><i class="bi bi-github fs-4 text-muted"></i></a></li>
                <li class="ms-3"><a href="#"><i class="bi bi-twitter fs-4 text-muted"></i></a></li>
                <li class="ms-3"><a href="#"><i class="bi bi-instagram fs-4 text-muted"></i></a></li>
                <li class="ms-3"><a href="#"><i class="bi bi-whatsapp fs-4 text-muted"></i></a></li>
                <li class="ms-3"><a href="#"><i class="bi bi-telegram fs-4 text-muted"></i></a></li>
            </ul>
        </footer>
    </div>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- JS -->
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>