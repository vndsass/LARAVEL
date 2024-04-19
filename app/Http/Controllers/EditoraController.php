<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('editoras.index',['editoras'=>Editora::orderBy('nome')->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $editora=new Editora();
        $editora->nome          =$request->nome;
        $editora->morada        =$request->morada;
        $editora->telefone      =$request->telefone;
        $editora->contribuinte  =$request->contribuinte;

        $editora->save();
        return redirect()->route('editora.create')->with('msg',' O registo foi gravado com sucesso.');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Editora $editora)
    {
        //
        return view('editoras.show', ['editora'=>$editora]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editora $editora)
    {
        //
        return view('editoras.edit', ['editora'=>$editora]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editora $editora)
    {
        //
        Editora::findOrFail($editora->id)->update($request->all());
        return redirect()->route('editora.show', $editora->id)->with('msg',' O registo foi atualizado com sucesso.');    ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editora $editora)
    {
        //
        Editora::findOrfail($editora->id)->delete();
        return redirect()->route('editora.index');
    }

    public function confirma_delete_editora(Editora $id){
        return view('editoras.confirma_delete', ['id'=>$id])->with('msg',' O registo foi eliminado com sucesso.'); 
    }
}
