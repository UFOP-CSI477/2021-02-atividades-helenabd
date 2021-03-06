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
            <dh-component>
                <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pt-6 gap-60">
                    <!-- CALORIAS CONSUMIDAS -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            consumidas</span>
                    </div>
                    <!-- ??GUA -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">??gua</span>
                    </div>
                    <!-- CALORIAS RESTANTES -->
                    <div class="mt-2 flex flex-col">
                        <span class="font-sans font-bold text-teal-800 text-lg text-center">Calorias
                            gastas</span>
                    </div>
                </div>
            </dh-component>
        </div>
    </div>
</div>

@endsection