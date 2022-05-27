@extends('principal')

@section('content')

<div class="py-2">
    <div class="w-full text-right pr-8">
        <a href="" class="text-lg font-bold text-teal-800">Sair</a>
    </div>
    <div class="max-w-4xl mx-auto bg-white py-6 px-12 rounded-lg shadow-2xl">
        <!-- TITLE -->
        <div class="flex space-x-2 justify-center mb-4 lg:grid-cols-2">
            <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-teal-800">Dados</p>
        </div>
        <div>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <!-- NOME -->
                <div class="mt-2 flex flex-col">
                    <label for="name" class="font-sans font-bold text-teal-800 text-lg content-center">Nome:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->name}}</span>
                </div>
                <!-- DATA_NASCIMENTO -->
                <div class="mt-2 flex flex-col">
                    <label for="birthday" class="font-sans font-bold text-teal-800 text-lg content-center">Data de
                        Nascimento:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->birthday}}</span>
                </div>
                <!-- TELEFONE -->
                <div class="mt-2 flex flex-col">
                    <label for="phone_number" class="font-sans font-bold text-teal-800 text-lg content-center">Telefone:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->phone_number}}</span>
                </div>
                <!-- GÊNERO -->
                <div class="mt-2 flex flex-col">
                    <label for="gender" class="font-sans font-bold text-teal-800 text-lg content-center">Sexo:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->sex}}</span>
                </div>
                <!-- ALTURA -->
                <div class="mt-2 flex flex-col">
                    <label for="height" class="font-sans font-bold text-teal-800 text-lg content-center">Altura:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->height}} cm</span>
                </div>
                <!-- PESO -->
                <div class="mt-2 flex flex-col">
                    <label for="weight" class="font-sans font-bold text-teal-800 text-lg content-center">Peso:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->weight}} kg</span>
                </div>
                <!-- E-MAIL -->
                <div class="mt-2 flex flex-col">
                    <label for="email" class="font-sans font-bold text-teal-800 text-lg content-center">Email:</label>
                    <span class="font-sans font-semibold pt-2">{{$user->email}}</span>
                </div>
                <!-- SENHA -->
                <div class="mt-2 flex flex-col">
                    <!-- <label for="password"
                            class="font-sans font-bold text-teal-800 text-lg content-center">Senha:</label>
                        <input type="password" id="password" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                        rounded-lg border border-teal-700/50 focus:outline-none px-4 py-2 mt-3 hover:border-teal-700"
                            required> -->
                </div>
                <div class="mt-2 flex flex-col">
                    <a type="button" class="inline-block w-1/3 px-6 py-2.5 bg-teal-700 text-white 
            font-medium text-md leading-tight rounded shadow-md text-center
            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
            transition duration-150 ease-in-out" href="{{ route('user.edit', $user->id) }}">Editar</a>
                </div>
                </form>
            </div>

        </div>
    </div>

    @endsection