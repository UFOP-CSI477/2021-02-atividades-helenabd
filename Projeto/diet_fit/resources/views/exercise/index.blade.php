@extends('principal')

@section('content')

<div class="p-6">
    <h2 class="mb-6 text-2xl font-bold text-teal-800">Listagem de exercícios</h2>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-gradient-to-tr from-teal-900 to-teal-600 py-2 px-4 text-white font-semibold text-lg">
                <tr>
                    <th class="px-6 py-3">
                        ID
                    </th>
                    <th class="px-6 py-3">
                        Tipo
                    </th>
                    <th class="px-6 py-3">
                        Calorias
                    </th>
                    <th class="px-6 py-3">
                        Ações
                    </th>
                </tr>
            </thead>
            @foreach($exercises as $exercise)
            <tbody>
                <tr class="bg-white dark:bg-gray-100 hover:bg-gray-50 dark:hover:bg-teal-700/20 border border-teal-600/20">
                    <td class="px-6 py-4 font-semibold text-teal-900">
                        {{$exercise->id}}
                    </td>
                    <td class="px-6 py-4 font-semibold text-teal-900">
                        {{$exercise->type}}
                    </td>
                    <td class="px-6 py-4 font-semibold text-teal-900">
                        {{$exercise->calories}} kcal
                    </td>
                    <td class="px-2 py-4 font-semibold flex justify-evenly">
                        <a class="p-2 text-white rounded bg-orange-300" href=" {{ route('exercise.edit', $exercise->id) }}">Editar</a>
                        <form name="frmDelete" action="{{ route('exercise.destroy', $exercise->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Deletar" class="p-2 text-white rounded bg-red-400">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    <div class="py-4">
        <a class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
            font-medium text-md leading-tight rounded shadow-md 
            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
            transition duration-150 ease-in-out" href="{{ route('progress') }}">Voltar</a>
    </div>
</div>

@endsection