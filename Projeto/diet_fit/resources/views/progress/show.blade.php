@extends('principal')

@section('content')

<div class="flex space-x justify-center py-8">

    <div class="w-full flex flex-col bg-white">

        <div class="px-6 py-4">
            <div class="mt-2  w-full">
                <form action="{{ route('progress.show') }}" method="post">

                    @csrf
                    @method('GET')

                    <div class="relative items-center justify-center text-center">
                        <label for="date" class="font-sans font-bold text-teal-800 text-lg text-center">Selecione uma
                            data:</label>
                        <div class="">
                            <input id="date" name="date" aria-labelledby="date" type="date" placeholder="Digite a data" class="text-md font-medium 
                            leading-4 text-teal-700 bg-slate-200 
                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 
                            hover:border-teal-700" id="date">
                            <input type="submit" class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
                            font-medium text-md leading-tight rounded shadow-md 
                            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                            transition duration-150 ease-in-out" value="Exibir">
                        </div>
                    </div>
                </form>


            </div>
        </div>

        <div class="px-6 pb-6 my-8">
            <div class="text-center">
                <span class="font-sans font-bold text-teal-800 text-lg text-center">Data: </span>
                <span class="font-sans font-semibold pt-2 text-center">{{ $dateFormat }}</span>
            </div>
            <dh-component>
                <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pt-6 gap-8">
                    <!-- CALORIAS CONSUMIDAS -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            consumidas</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalFood }}kcal</span>
                        <div class="py-6 text-center">
                            <div class="p-6">
                                <h2 class="mb-6 text-2xl font-bold text-teal-800">Lista de alimentação</h2>
                                <div class="relative overflow-x-auto shadow-md rounded-lg">
                                    <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 bg-gradient-to-tr from-teal-900 to-teal-600 py-2 px-4 text-white font-semibold text-lg">
                                            <tr>
                                                <!-- <th class="px-6 py-3">
                                                    ID
                                                </th> -->
                                                <th class="px-6 py-3 text-white">
                                                    Refeição
                                                </th>
                                                <th class="px-6 py-3 text-white">
                                                    Calorias
                                                </th>
                                                <th class="px-6 py-3 text-white">
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($foods as $food)
                                        <tbody>
                                            <tr class="bg-white dark:bg-gray-100 hover:bg-gray-50 dark:hover:bg-teal-700/20 border border-teal-600/20">
                                                <!-- <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$food->id}}
                                                </td> -->
                                                <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$food->snack}}
                                                </td>
                                                <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$food->calories}} kcal
                                                </td>
                                                <td class="px-2 py-4 font-semibold flex justify-evenly">
                                                    <a class="p-1 text-white rounded bg-orange-300" href=" {{ route('food.edit', $food->id) }}">Editar</a>
                                                    <form name="frmDelete" action="{{ route('food.destroy', $food->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="Deletar" class="p-1 text-white rounded bg-red-400">
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ÁGUA -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Água</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalWater }}mL</span>
                        <div class="py-6 text-center">
                            <div class="p-6">
                                <h2 class="mb-6 text-2xl font-bold text-teal-800">Lista de consumo de água</h2>
                                <div class="relative overflow-x-auto shadow-md rounded-lg">
                                    <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 bg-gradient-to-tr from-teal-900 to-teal-600 py-2 px-4 text-white font-semibold text-lg">
                                            <tr>
                                                <!-- <th class="px-6 py-3">
                                                    ID
                                                </th> -->
                                                <th class="px-6 py-3 text-white">
                                                    Quantidade
                                                </th>
                                                <th class="px-6 py-3 text-white">
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($waters as $water)
                                        <tbody>
                                            <tr class="bg-white dark:bg-gray-100 hover:bg-gray-50 dark:hover:bg-teal-700/20 border border-teal-600/20">
                                                <!-- <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$water->id}}
                                                </td> -->
                                                <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$water->amount}} mL
                                                </td>
                                                <td class="px-2 py-4 font-semibold flex justify-evenly">
                                                    <a class="p-1 text-white rounded bg-orange-300" href=" {{ route('water.edit', $water->id) }}">Editar</a>
                                                    <form name="frmDelete" action="{{ route('water.destroy', $water->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="Deletar" class="p-1 text-white rounded bg-red-400">
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CALORIAS RESTANTES -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            gastas</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalExercise }}kcal</span>
                        <div class="py-6 text-center">
                            <div class="p-6">
                                <h2 class="mb-6 text-2xl font-bold text-teal-800">Lista de exercícios</h2>
                                <div class="relative overflow-x-auto shadow-md rounded-lg">
                                    <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 bg-gradient-to-tr from-teal-900 to-teal-600 py-2 px-4 text-white font-semibold text-lg">
                                            <tr>
                                                <!-- <th class="px-6 py-3">
                                                    ID
                                                </th> -->
                                                <th class="px-6 py-3 text-white">
                                                    Tipo
                                                </th>
                                                <th class="px-6 py-3 text-white">
                                                    Calorias
                                                </th>
                                                <th class="px-6 py-3 text-white">
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($exercises as $exercise)
                                        <tbody>
                                            <tr class="bg-white dark:bg-gray-100 hover:bg-gray-50 dark:hover:bg-teal-700/20 border border-teal-600/20">
                                                <!-- <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$exercise->id}}
                                                </td> -->
                                                <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$exercise->type}}
                                                </td>
                                                <td class="px-6 py-4 font-semibold text-teal-900">
                                                    {{$exercise->calories}} kcal
                                                </td>
                                                <td class="px-2 py-4 font-semibold flex justify-around">
                                                    <a class="p-1 text-white rounded bg-orange-300" href=" {{ route('exercise.edit', $exercise->id) }}">Editar</a>
                                                    <form name="frmDelete" action="{{ route('exercise.destroy', $exercise->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="Deletar" class="p-1 text-white rounded bg-red-400">
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dh-component>
        </div>
    </div>
</div>

@endsection