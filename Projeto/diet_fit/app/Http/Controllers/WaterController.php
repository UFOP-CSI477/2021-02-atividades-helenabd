<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWaterRequest;
use App\Http\Requests\UpdateWaterRequest;
use App\Models\Water;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
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
    public function store(StoreWaterRequest $request)
    {
        if (Water::create($request->all())) {
            session()->flash('message', 'Água adicionada com sucesso!');
            return redirect()->route('home');
        } else {
            session()->flash('error-message', 'Erro ao adicionar água!');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function show(Water $water)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function edit(Water $water)
    {
        return view('water.edit', ['water' => $water]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWaterRequest $request, Water $water)
    {
        $water->fill($request->all());
        if ($water->save()) {
            session()->flash('message', 'Água atualizada com sucesso!');
            return redirect()->route('progress');
        } else {
            session()->flash('error-message', 'Erro ao atualizar água!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function destroy(Water $water)
    {
        if ($water->delete()) {
            session()->flash('message', 'Água removida com sucesso!');
            return redirect()->route('progress');
        } else {
            session()->flash('error-message', 'Erro ao remover água!');
            return back()->withInput();
        }
    }
}
