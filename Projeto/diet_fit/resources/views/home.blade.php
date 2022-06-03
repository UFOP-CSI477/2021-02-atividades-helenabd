@extends('principal')

@section('content')
<div class="w-full py-12">
    <div class="container mx-auto flex items-start justify-center">
        <div class="w-full">
            <dh-component>
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-8 content-center space-x-20">
                    <!-- Card Food -->
                    <div class="dark:bg-slate-400/30 shadow-lg p-6 content-center rounded-lg">
                        <div class="flex items-center justify-center w-full sm:w-full mb-8">
                            <div class="mx-2.5 items-center content-center">
                                <!-- Card Title -->
                                <div class="flex space-x-2 justify-center">
                                    <p class="font-sans font-bold text-teal-800 text-3xl content-center">Alimentação
                                    </p>
                                </div>
                                <form action="{{ route('food.store') }}" method="post">

                                    @csrf

                                    <!-- Snack -->
                                    <div id="food_snack" class="py-6">
                                        <label for="snack" class="font-sans font-bold text-teal-800/70 text-lg content-center">Refeição:</label>
                                        <br>
                                        <div class="inline-block relative w-64 py-4">
                                            <select id="snack" name="snack" class="px-2 appearance-auto block w-full border border-teal-700/50 
                                            hover:border-teal-700 py-2 pr-8 rounded shadow leading-tight 
                                            focus:outline-none focus:shadow-outline   
                                            transition ease-in-out bg-slate-200 text-teal-700 font-semibold">
                                                <option disabled selected class="text-teal-700 font-semibold">Opções
                                                </option>
                                                <option id="breakfast" class="text-teal-700 font-semibold">Café da manhã
                                                </option>
                                                <option id="snacks" class="text-teal-700 font-semibold">Lanche</option>
                                                <option id="lunch" class="text-teal-700 font-semibold">Almoço</option>
                                                <option id="dinner" class="text-teal-700 font-semibold">Janta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Calorie -->
                                    <div id="food_calorie" class="mt-4 flex flex-col">
                                        <label for="calories" class="font-sans font-bold text-teal-800/70 text-lg content-center">Calorias(kcal):</label>
                                        <input id="calories" name="calories" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 
                                            hover:border-teal-700" />
                                    </div>
                                    <!-- Button -->
                                    <div class="flex space-x-2 justify-center mt-10">
                                        <input type="submit" class="inline-block w-2/3 px-6 py-2.5 bg-teal-700 text-white 
                                            font-medium text-md leading-tight rounded shadow-md 
                                            hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                                            focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                                            transition duration-150 ease-in-out" value="Salvar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Card Exercise -->
                    <div class="dark:bg-slate-400/30 shadow-lg p-6 content-center rounded-lg">
                        <div class="flex items-center justify-center w-full sm:w-full mb-8">
                            <div class="mx-2.5 items-center content-center">
                                <!-- Card Title -->
                                <div class="flex space-x-2 justify-center">
                                    <p class="font-sans font-bold text-teal-800 text-3xl content-center">Exercícios
                                    </p>
                                </div>
                                <form action="{{ route('exercise.store') }}" method="post">

                                    @csrf

                                    <!-- Exercise -->
                                    <div id="exercise_type" class="py-6">
                                        <label for="type" class="font-sans font-bold text-teal-800/70 text-lg content-center">Tipo:</label>
                                        <br>
                                        <div class="inline-block relative w-64 py-4">
                                            <select id="type" name="type" class="px-2 appearance-auto block w-full border border-teal-700/50 
                                                hover:border-teal-700 py-2 pr-8 rounded shadow leading-tight 
                                                focus:outline-none focus:shadow-outline   
                                                transition ease-in-out bg-slate-200 text-teal-700 font-semibold">
                                                <option disabled selected class="text-teal-700 font-semibold">Opções
                                                </option>
                                                <option id="bodybuilding" class="text-teal-700 font-semibold">Musculação
                                                </option>
                                                <option id="functional" class="text-teal-700 font-semibold">Funcional</option>
                                                <option id="run" class="text-teal-700 font-semibold">Corrida</option>
                                                <option id="walking" class="text-teal-700 font-semibold">Caminhada</option>
                                                <option id="sports" class="text-teal-700 font-semibold">Esporte</option>
                                                <option id="pilates" class="text-teal-700 font-semibold">Pilates</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Calorie -->
                                    <div id="exercise_calorie" class="mt-4 flex flex-col">
                                        <label for="calories" class="font-sans font-bold text-teal-800/70 text-lg content-center">Calorias(kcal):</label>
                                        <input id="calories" name="calories" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 
                                            rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 
                                            hover:border-teal-700" />
                                    </div>
                                    <!-- Button -->
                                    <div class="flex space-x-2 justify-center mt-10">
                                        <input type="submit" class="inline-block w-2/3 px-6 py-2.5 bg-teal-700 text-white 
                                                font-medium text-md leading-tight rounded shadow-md 
                                                hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                                                focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                                                transition duration-150 ease-in-out" value="Salvar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Card Water -->
                    <div class="dark:bg-slate-400/30 shadow-lg p-6 content-center rounded-lg">
                        <div class="flex items-center justify-center w-full sm:w-full mb-8">
                            <div class="mx-2.5 items-center content-center">
                                <!-- Card Title -->
                                <div class="flex space-x-2 justify-center">
                                    <p class="font-sans font-bold text-teal-800 text-3xl">Água
                                    </p>
                                </div>
                                <br>
                                <form action="{{ route('water.store') }}" method="post">

                                    @csrf

                                    <!-- Quantity -->
                                    <div id="exercise_calorie" class="py-8 my-8 space-y-5 flex flex-col">
                                        <label for="amount" class="font-sans font-bold text-teal-800/70 text-lg content-center">Quantidade(mL):</label>
                                        <input type="text" name="amount" id="amount" class="text-md font-medium leading-4 text-teal-700 bg-slate-200 rounded-lg border border-teal-700/50 focus:outline-none px-4 py-3 mt-4 hover:border-teal-700" />
                                    </div>
                                    <!-- Button -->
                                    <br><br>
                                    <div class="flex space-x-2 justify-center">
                                        <input type="submit" class="inline-block w-2/3 px-6 py-2.5 bg-teal-700 text-white 
                                                font-medium text-md leading-tight rounded shadow-md 
                                                hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                                                focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                                                transition duration-150 ease-in-out" value="Salvar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Card code block end -->
            </dh-component>
        </div>
    </div>
</div>
@endsection