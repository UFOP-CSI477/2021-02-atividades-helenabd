<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Http\Requests\StoreColetaRequest;
use App\Http\Requests\UpdateColetaRequest;
use App\Models\Entidade;
use App\Models\Item;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coletas = Coleta::all();
        return view('coletas.index', ['coletas' => $coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::orderBy('descricao')->get();
        $entidades = Entidade::orderBy('nome')->get();
        return view('coletas.create', ['items' => $items, 'entidades' => $entidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColetaRequest $request)
    {
        if (Coleta::create($request->all())) {
            return redirect()->route('coletas.index')->with('success', 'Coleta cadastrada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar coleta!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        return view('coletas.show', ['coleta' => $coleta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        $items = Item::orderBy('descricao')->get();
        $entidades = Entidade::orderBy('nome')->get();
        return view('coletas.edit', ['coleta' => $coleta, 'items' => $items, 'entidades' => $entidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColetaRequest  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColetaRequest $request, Coleta $coleta)
    {
        $coleta->fill($request->all());
        if ($coleta->save()) {
            return redirect()->route('coletas.index')->with('success', 'Coleta atualizada com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar coleta!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        if ($coleta->delete()) {
            return redirect()->route('coletas.index')->with('success', 'Coleta excluída com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir coleta!');
        }
    }
}
