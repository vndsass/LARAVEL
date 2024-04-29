@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >Criar Editora</div>
                   
                <p class="btn btn-dark"><a href="{{route('editora.index')}}">   
                        Listar todas as editoras</a>
                    </p>
            
                <div class="card-body">

                    <form action="{{route('editora.store')}}" method="post">
                        @csrf                        
                        <fieldset >
                            <legend>Preencha todos os campos: </legend>
                            
                            <div >                                
                                <input class="form-control mb-2"  type="hidden" name="editora_id" value="{{Auth::user()->id}}" >                                
                            </div>
                            <div >
                                <label for="nome">Nome:</label>
                                <input class="form-control mb-2"  required autofocus type="text" name="nome" id="nome" placeholder="Nome:">                                
                            </div>
                           
                            <div >
                                <label for="morada">Morada:</label>
                                <input class="form-control mb-2"  type="text" name="morada" id="morada" placeholder="Morada">                                
                            </div>
                            
                            
                            <div >
                                <label for="telefone">Telefone:</label>
                                <input  class="form-control mb-2"  required type="text" name="telefone" id="telefone" placeholder="Telefone">
                            </div>
                            <div >
                                <label for="contribuinte">Contribuinte:</label>
                                <input  class="form-control mb-2"  required type="text" name="contribuinte" id="contribuinte" placeholder="Contribuinte">
                            </div>
                            <div>
                                <button class="btn btn-secondary" type="submit" value="Gravar">Gravar
                                     
                                </button>
                            
                                <button class="btn btn-secondary" type="reset" value="limpar">Limpar                                     
                                </button>
                            </div>
                        </fieldset>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
php