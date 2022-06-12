<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('registros.index', ['registros' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        $usuarios = User::orderBy('nome')->get();
        return view('registros.create', ['equipamentos' => $equipamentos, 'usuarios' => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistroRequest $request)
    {
        if (Registro::create($request->all())) {
            return redirect()->route('registros.index')->with('success', 'Registro cadastrado com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar registro!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.show', ['registro' => $registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        $usuarios = User::orderBy('nome')->get();
        return view('registros.edit', ['registro' => $registro, 'equipamentos' => $equipamentos, 'usuarios' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistroRequest  $request
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->fill($request->all());
        if ($registro->save()) {
            return redirect()->route('registros.index')->with('success', 'Registro atualizado com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar registro!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        if ($registro->delete()) {
            return redirect()->route('registros.index')->with('success', 'Registro excluído com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir registro!');
        }
    }

    public function indexByDate()
    {
        $registros = Registro::orderBy('datalimite', 'asc')->get();
        return view('registros.indexByDate', ['registros' => $registros]);
    }
}
