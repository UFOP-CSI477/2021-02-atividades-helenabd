@extends('principal')

@section('content')

<div class="flex space-x-2 justify-center py-8">

    <div class="w-3/4 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden">

        <div class="px-6 py-4 border-t border-gray-200">
            <div class="mt-2  w-full">
                <div class="relative flex flex-col items-center justify-center">
                    <label for="date" class="font-sans font-bold text-teal-800 text-lg text-center">Selecione uma
                        data:</label>
                    <input aria-labelledby="date" type="date" placeholder="Digite a data" class="text-md font-medium 
                leading-4 text-teal-700 bg-slate-200 
            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 
            hover:border-teal-700" id="date">
                </div>
            </div>
        </div>

        <div class="px-6 pb-6 my-20">
            <dh-component>
                <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pt-6 gap-8">
                    <!-- CALORIAS CONSUMIDAS -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            consumidas</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalFood }}kcal</span>
                        <div class="py-6 text-center">
                            <a class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
                            font-medium text-md leading-tight rounded shadow-md 
                            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                            transition duration-150 ease-in-out" href="{{ route('food.index') }}">Exibir</a>
                        </div>
                    </div>
                    <!-- ÁGUA -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Água</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalWater }}mL</span>
                        <div class="py-6 text-center">
                            <a class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
                            font-medium text-md leading-tight rounded shadow-md 
                            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                            transition duration-150 ease-in-out" href="{{ route('water.index') }}">Exibir</a>
                        </div>
                    </div>
                    <!-- CALORIAS RESTANTES -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            gastas</span>
                        <span class="font-sans font-semibold pt-2 text-center">{{ $totalExercise }}kcal</span>
                        <div class="py-6 text-center">
                            <a class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
                            font-medium text-md leading-tight rounded shadow-md 
                            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                            transition duration-150 ease-in-out" href="{{ route('exercise.index') }}">Exibir</a>
                        </div>
                    </div>
                </div>
            </dh-component>
        </div>
    </div>
</div>

@endsection