<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::OrderBy('nome');
        
        return View('pessoa.index')->with(compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = null;
        return view('pessoa.form')->with(compact('pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->fill($request->all());
        $pessoa->save();

        return redirect()->route('pessoa.index')->with('success','Pessoa Cadastrada com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $pessoa = Pessoa::find($id);
        return view('pessoa.show')->with(compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $pessoa = Pessoa::find($id);
        // dd($pessoa);
        return view('pessoa.form')->with(compact('pessoa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->fill($request->all());
        $pessoa->save();

        return redirect()->route('pessoa.index')->with('success','Pessoa Atualizada com Sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return redirect()->route('pessoa.index')->with('danger','Pessoa Deletado com Sucesso!');
    }
}
