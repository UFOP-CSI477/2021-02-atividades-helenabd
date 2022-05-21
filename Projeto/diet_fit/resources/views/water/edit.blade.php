@extends('principal')

@section('content')

<div class="p-6 content-center rounded-lg">
    <div class="flex items-center justify-center w-full sm:w-full mb-8">
        <div class="mx-2.5 items-center content-center">
            <!-- Card Title -->
            <div class="flex space-x-2 justify-center">
                <p class="font-sans font-bold text-teal-800 text-3xl">Água
                </p>
            </div>
            <br>
            <form action="{{ route('water.update', $water->id) }}" method="post">

                @csrf
                @method('PUT')

                <!-- Quantity -->
                <div id="exercise_calorie" class="py-8 my-8 space-y-5 flex flex-col">
                    <label for="amount" class="font-sans font-bold text-teal-800/70 text-lg content-center">Quantidade(mL):</label>
                    <input type="text" name="amount" id="amount" class="text-md font-medium 
                    leading-4 text-teal-700 bg-slate-200 rounded-lg border border-teal-700/50 
                    focus:outline-none px-4 py-3 mt-4 hover:border-teal-700" value="{{ $water->amount }}" />
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
                    transition duration-150 ease-in-out" href="{{ route('water.index') }}">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection