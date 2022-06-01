<!DOCTYPE html>
<html lang="en" class="bg-gradient-to-tl from-teal-800/70 to-slate-200 h-full">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Fit</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- Erros -->
    <div class="w-full justify-center items-center">
        @if($errors->any())
        <div role="alert">
            <!-- <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Alerta!
                </div> -->
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>

    <!-- CONTEUDO DA PAGINA -->
    @yield('content')
</body>

</html>