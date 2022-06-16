<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('descricao')->get();
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        if (Item::create($request->all())) {
            return redirect()->route('items.index')->with('success', 'Item cadastrado com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao cadastrar item!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->fill($request->all());
        if ($item->save()) {
            return redirect()->route('items.index')->with('success', 'Item atualizado com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao atualizar item!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if ($item->coletas->count() > 0) {
            return back()->withInput()->with('error-message', 'Item não pode ser excluída pois possui coletas!');
        } else if ($item->delete()) {
            return redirect()->route('items.index')->with('success', 'Item excluído com sucesso!');
        } else {
            return back()->withInput()->with('error-message', 'Erro ao excluir item!');
        }
    }
}
