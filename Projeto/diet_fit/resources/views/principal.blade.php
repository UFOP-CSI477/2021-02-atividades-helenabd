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
        <div class="bg-teal-700/70 py-4">
            <div class="container mx-auto flex items-center justify-between">
                <div>
                    <span class="font-sans font-bold dark:text-teal text-2xl text-teal-900 text-bold">DIET</span>
                    <span class="font-sans font-bold dark:text-teal text-2xl text-teal-700 text-bold">FIT</span>
                </div>
                <ul class="hidden w-12/12 md:flex items-center justify-center space-x-12">
                    <li>
                        <a href="{{route('home')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">HOME</a>
                    </li>
                    <li>
                        <a href="{{route('progress')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">PROGRESSO</a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">PERFIL</a>
                    </li>
                </ul>

                <div>
                    <!-- Logout -->
                    <form action=" {{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="bg-transparent hover:bg-white-500 text-white font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded">Logout</button>
                    </form>
                </div>
            </div>
        </div>

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

        <!-- Snackbar OK -->
        @if(session('message'))
        <section class="items-center justify-center min-h-screen min-w-full">
            <div class="items-center space-y-4">
                <div class="mx-2 sm:mx-auto max-w-sm  flex flex-row items-center justify-between bg-gray-50 shadow-lg p-3 text-sm leading-none font-medium rounded-xl whitespace-no-wrap">
                    <div class="inline-flex items-center text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        {{session('message')}}
                    </div>
                    <div class="text-green-700 cursor-pointer hover:text-green-800">
                        <span class="flex-shrink-0 inline-flex item-center justify-center border-l-2 border-t-2 border-green-700 p-1 leading-none rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Snackbar Error -->
        @if(session('error-message'))
        <section class="items-center justify-center min-h-screen min-w-full">
            <div class="items-center space-y-4">
                <div class="mx-2 sm:mx-auto max-w-sm  flex flex-row items-center justify-between bg-gray-50 shadow-lg p-3 text-sm leading-none font-medium rounded-xl whitespace-no-wrap">
                    <div class="inline-flex items-center text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        {{session('error-message')}}
                    </div>
                    <div class="text-red-700 cursor-pointer hover:text-red-800">
                        <span class="flex-shrink-0 inline-flex item-center justify-center border-l-2 border-t-2 border-red-700 p-1 leading-none rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @endif

</body>

</html>