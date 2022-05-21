@extends('welcome')

@section('content')

<div class="h-full w-full px-4">
    <!-- LOGO -->
    <div class="pl-4 pt-4">
        <span class="font-sans font-bold dark:text-teal text-2xl text-teal-900 text-bold">DIET</span>
        <span class="font-sans font-bold dark:text-teal text-2xl text-teal-700 text-bold">FIT</span>
    </div>

    <div class="max-w-4xl mx-auto bg-white py-8 px-12 rounded-lg shadow-2xl">
        <!-- TITLE -->
        <div class="flex space-x-2 justify-center mb-4">
            <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-teal-800">Cadastro</p>
        </div>
        <form>
            <!-- NOME -->
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div class="mt-2 flex flex-col">
                    <label for="name" class="font-sans font-bold text-teal-800 text-lg content-center">Nome:</label>
                    <input type="text" id="name" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- DATA_NASCIMENTO -->
                <div class="mt-2 flex flex-col">
                    <label for="birthday" class="font-sans font-bold text-teal-800 text-lg content-center">Data de
                        Nascimento:</label>
                    <input type="text" id="birthday" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- TELEFONE -->
                <div class="mt-2 flex flex-col">
                    <label for="phone_number" class="font-sans font-bold text-teal-800 text-lg content-center">Telefone:</label>
                    <input type="text" id="phone_number" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- GÊNERO -->
                <div class="mt-2 flex flex-col">
                    <label for="gender" class="font-sans font-bold text-teal-800 text-lg content-center">Sexo:</label>
                    <select name="gender" id="gender" class="px-2 appearance-auto block w-full border border-teal-700/50 
                        hover:border-teal-700 py-2 pr-8 rounded-lg shadow leading-4 
                        focus:outline-none focus:shadow-outline   
                        transition ease-in-out bg-slate-200 text-teal-700 font-semibold mt-2.5">
                        <option disabled selected class="text-teal-700 font-semibold">Opções</option>
                        <option class="text-teal-700 font-semibold">Sem gênero</option>
                        <option class="text-teal-700 font-semibold">Feminino</option>
                        <option class="text-teal-700 font-semibold">Masculino</option>
                    </select>
                </div>
                <!-- ALTURA -->
                <div class="mt-2 flex flex-col">
                    <label for="height" class="font-sans font-bold text-teal-800 text-lg content-center">Altura:</label>
                    <input type="text" id="height" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- PESO -->
                <div class="mt-2 flex flex-col">
                    <label for="weight" class="font-sans font-bold text-teal-800 text-lg content-center">Peso:</label>
                    <input type="text" id="weight" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- E-MAIL -->
                <div class="mt-2 flex flex-col">
                    <label for="email" class="font-sans font-bold text-teal-800 text-lg content-center">Email:</label>
                    <input type="text" id="email" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>
                <!-- SENHA -->
                <div class="mt-2 flex flex-col">
                    <label for="password" class="font-sans font-bold text-teal-800 text-lg content-center">Senha:</label>
                    <input type="password" id="password" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700" required>
                </div>

        </form>
    </div>
    <div class="flex space-x-2 justify-center">
        <button type="button" class="inline-block w-1/3 px-6 py-2.5 bg-teal-700 text-white 
                font-medium text-md leading-tight rounded shadow-md 
                hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                transition duration-150 ease-in-out">Salvar</button>
    </div>
</div>

@endsection