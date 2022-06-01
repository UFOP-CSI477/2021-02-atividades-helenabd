<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\View\DynamicComponent;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        if (Food::create($request->all())) {
            session()->flash('message', 'Alimento adicionado com sucesso!');
            return redirect()->route('home');
        } else {
            session()->flash('error-message', 'Erro ao adicionar alimento!');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('food.edit', ['food' => $food]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        $food->fill($request->all());
        if ($food->save()) {
            session()->flash('message', 'Alimentação atualizada com sucesso!');
            return redirect()->route('progress');
        } else {
            session()->flash('error-message', 'Erro ao atualizar alimentação!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        if ($food->delete()) {
            session()->flash('message', 'Alimentação removida com sucesso!');
            return redirect()->route('progress');
        } else {
            session()->flash('error-message', 'Alimentação não pode ser removida!');
            return back()->withInput();
        }
    }
}
