@extends('welcome')

@section('content')

<div class="h-full w-full py-12 px-4">
    <div>

        <!-- LOGO -->
        <div class="pl-4 pt-4">
            <span class="font-sans font-bold dark:text-teal text-7xl text-teal-900 text-bold">DIET</span>
            <span class="font-sans font-bold dark:text-teal text-7xl text-teal-700 text-bold">FIT</span>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center">

        <div class="bg-white shadow rounded-lg lg:w-1/3  md:w-1/3 p-10 mt-16">
            <!-- TITLE -->
            <div class="flex space-x-2 justify-center">
                <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-teal-800">Login</p>
            </div>
            <!-- EMAIL -->
            <div class="mt-6  w-full">
                <div class="relative flex items-center justify-center">
                    <input aria-labelledby="email" type="email" placeholder="Email" class="text-md font-medium 
                        leading-4 text-teal-700 bg-slate-200 
                    rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 
                    hover:border-teal-700" id="email">
                </div>
            </div>
            <!-- SENHA -->
            <div class="mt-6  w-full">
                <div class="relative flex items-center justify-center">
                    <input id="pass" type="password" placeholder="Senha" class="text-md font-medium leading-4 
                        text-teal-700 bg-slate-200 rounded-lg border border-teal-700/50 focus:outline-none 
                        px-4 py-3 mt-4 hover:border-teal-700" />
                </div>
            </div>
            <!-- BOTÃO -->
            <div class="mt-8 flex space-x-2 justify-center">
                <button role="button" class="inline-block w-2/3 px-6 py-2.5 bg-teal-700 text-white 
                        font-medium text-md leading-tight rounded shadow-md 
                        hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                        focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                        transition duration-150 ease-in-out">Entrar</button>
            </div>
            <!-- Cadastre-se -->
            <div class="flex space-x-2 justify-center">
                <p tabindex="0" class="focus:outline-none text-md mt-4 font-medium leading-none text-gray-700">Ainda
                    não
                    é cadastrado? <a href="javascript:void(0)" class="hover:text-teal-900 focus:text-teal-900 
                        focus:outline-none text-md font-bold 
                        leading-none text-teal-800 cursor-pointer">
                        Cadastre-se</a></p>
            </div>
        </div>
    </div>
</div>

@endsection