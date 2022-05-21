<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Fit</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <!-- TODO: descobrir como colocar bold na tela que está no navbar -->
    <div class="container-fluid">
        <!-- NAV_BAR -->
        <div class="bg-teal-700/70 py-8">
            <div class="container mx-auto flex items-center justify-between">
                <div>
                    <span class="font-sans font-bold dark:text-teal text-2xl text-teal-900 text-bold">DIET</span>
                    <span class="font-sans font-bold dark:text-teal text-2xl text-teal-700 text-bold">FIT</span>
                </div>
                <ul class="hidden w-12/12 md:flex items-center justify-center space-x-12">
                    <li>
                        <a href="{{route('home')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline font-bold">HOME</a>
                    </li>
                    <li>
                        <a href="{{route('progress')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">PROGRESSO</a>
                    </li>
                    <li>
                        <a href="{{route('profile')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">PERFIL</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTEUDO DA PAGINA -->
        @yield('content')

    </div>

</body>

</html>