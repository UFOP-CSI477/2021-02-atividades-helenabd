@extends('principal')

@section('content')

<div class="p-6 content-center rounded-lg">
    <div class="flex items-center justify-center w-full sm:w-full mb-8">
        <div class="mx-2.5 items-center content-center">
            <!-- Card Title -->
            <div class="flex space-x-2 justify-center">
                <p class="font-sans font-bold text-teal-800 text-3xl">Alimentação
                </p>
            </div>
            <br>
            <form action="{{ route('food.update', $food->id) }}" method="post">

                @csrf
                @method('PUT')

                <!-- Snack -->
                <div id="food_snack" class="py-6">
                    <label for="snack" class="font-sans font-bold text-teal-800/70 text-lg content-center">Refeição:</label>
                    <br>
                    <div class="inline-block relative w-64 py-4">
                        <select id="snack" name="snack" class="px-2 appearance-auto block w-full border border-teal-700/50 
                                            hover:border-teal-700 py-2 pr-8 rounded shadow leading-tight 
                                            focus:outline-none focus:shadow-outline   
                                            transition ease-in-out bg-slate-200 text-teal-700 font-semibold">
                            <option disabled selected class="text-teal-700 font-semibold">{{ $food->snack }}</option>
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
                                            hover:border-teal-700" value="{{ $food->calories }}" />
                </div>
                <!-- Button -->
                <br><br>
                <div class="flex space-x-2 justify-center">
                    <input type="submit" class="inline-block w-2/3 px-6 py-2.5 bg-teal-700 text-white 
                                                font-medium text-md leading-tight rounded shadow-md 
                                                hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                                                focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                                                transition duration-150 ease-in-out" value="Atualizar">
                    <a class="inline-block w-1/8 px-6 py-2.5 bg-teal-700 text-white 
                    font-medium text-md leading-tight rounded shadow-md 
                    hover:bg-teal-800 hover:shadow-lg focus:bg-teal-900 focus:shadow-lg 
                    focus:outline-none focus:ring-0 active:bg-teal-800 active:shadow-lg 
                    transition duration-150 ease-in-out" href="{{ route('food.index') }}">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection