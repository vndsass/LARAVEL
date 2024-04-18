<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class SocioController extends Controller
{
    public function socio_user(User $id)
    {   $user=User::where('id',$id->id)->first();
        $socios=$user->socios()->get();
        return view('socios.socio_user',['socios'=>$socios]);
            

    } 
    
    
    /**
     * Display a listing of the resource.
     */
    
    
     public function index()
    {
        //
        return view('socios.index',[
             'socios'=>Socio::orderBy('nome')->paginate(20)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('socios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ////model Socio
        $socio=new Socio();
        //cada campo do form vai corresponder  a um atributo da tabela, colocar pela mesma ordem  
        $socio->user_id     =$request->user_id;
        $socio->nome        =$request->nome;
        $socio->cc          =$request->cc;
        $socio->morada      =$request->morada;
        $socio->cod_postal  =$request->cod_postal;
        $socio->localidade  =$request->localidade;
        $socio->email       =$request->email;
        $socio->telefone    =$request->telefone;
        
        $socio->save();

        return redirect()->route('socio.create')->with('msg',' O registo foi gravado com sucesso.');        
    }

    /**
     * Display the specified resource.
     */
    public function show(Socio $socio)
    {
        //
        return view('socios.show', ['socio'=>$socio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Socio $socio)
    {
        //
        //eturn 'Edição do Sócio '. $socio->nome;
        return view('socios.edit', ['socio'=>$socio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Socio $socio)
    {  
        Socio::findOrFail($socio->id)->update($request->all());
        return redirect()->route('socio.show', $socio->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Socio $id)
    {
        Socio::delete ($id);
        return redirect()->route('socio.index', Auth::user()->id);

    }

    public function confirma_delete(Socio $id)
    {
        return view('socios.confirma_delete',['id'=>$id]);
    }
    
}