@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >Criar Sócio</div>
                    @if (session('msg'))
                    <p class="btn btn-success">
                    {{session('msg')}}
                    </p >
                    @endif
                    <div>
                    <a class="btn btn-outline-primary" href="{{route('socio.index')}}">   
                        Listar todos os socios</a>
                    
                    
                   <a  class="btn btn-outline-secondary" href="{{route('socio.user', Auth::user()->id)}}">
                        Listar os meus socios</a>
                        </div>
                <div class="card-body">

                    <form action="{{route('socio.store')}}" method="post">
                        @csrf                        
                        <fieldset >
                            <legend>Preencha todos os campos: </legend>
                            
                            <div >                                
                                <input class="form-control mb-2"  type="hidden" name="user_id" value="{{Auth::user()->id}}" >                                
                            </div>
                            <div >
                                <label for="nome">Nome:</label>
                                <input class="form-control mb-2"  required autofocus type="text" name="nome" id="nome" placeholder="Nome:">                                
                            </div>
                            <div >
                                <label for="cc">Cartão de Cidadão:</label>
                                <input class="form-control mb-2"   required type="text" name="cc" id="cc" placeholder="Cartão de Cidadão">                                
                            </div>
                            <div >
                                <label for="morada">Morada:</label>
                                <input class="form-control mb-2"  type="text" name="morada" id="morada" placeholder="Morada">                                
                            </div>
                            <div >
                                <label for="cod_postal">Código-Postal:</label>
                                <input class="form-control mb-2"  type="text" name="cod_postal"id="cod_postal" placeholder="Código Postal">                                
                            </div>
                            <div >
                                <label for="localidade">Localidade:</label>
                                <input class="form-control mb-2"  type="text" name="localidade"  id="localidade" placeholder="Localidade">                                
                            </div>
                            <div >
                                <label for="email">Email:</label>
                                <input class="form-control mb-2"  required type="email" name="email" id="email" placeholder="Email">                                
                            </div>
                            <div >
                                <label for="telefone">Telefone:</label>
                                <input  class="form-control mb-2"  required type="text" name="telefone" id="telefone" placeholder="Telefone">
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