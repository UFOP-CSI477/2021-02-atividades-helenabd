<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipamentoRequest;
use App\Http\Requests\UpdateEquipamentoRequest;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamentos.index', ['equipamentos' => $equipamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEquipamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipamentoRequest $request)
    {
        if (Equipamento::create($request->all())) {
            return redirect()->route('equipamentos.index')->with('success', 'Equipamento cadastrado com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar equipamento!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        return view('equipamentos.show', ['equipamento' => $equipamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit', ['equipamento' => $equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquipamentosRequest  $request
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipamentoRequest $request, Equipamento $equipamento)
    {
        $equipamento->fill($request->all());
        if ($equipamento->save()) {
            session()->flash('success', 'Equipamento atualizado com sucesso!');
            return redirect()->route('equipamentos.index');
        } else {
            session()->flash('error-message', 'Erro ao atualizar equipamento!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamentos  $equipamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        if ($equipamento->registros->count() > 0) {
            session()->flash('error-message', 'N??o ?? poss??vel excluir equipamento com registros!');
            return back()->withInput();
        } else if ($equipamento->delete()) {
            session()->flash('success', 'Equipamento exclu??do com sucesso!');
            return redirect()->route('equipamentos.index');
        } else {
            session()->flash('error-message', 'Erro ao excluir equipamento!');
            return back()->withInput();
        }
    }

    public function indexByName()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        return view('equipamentos.indexByName', ['equipamentos' => $equipamentos]);
    }
}
