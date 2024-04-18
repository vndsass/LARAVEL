@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do sócio {{$socio->name}}
                
                </div>
 
                <div class="card-body">
                    <form action="{{route('socio.update', $socio->id)}}"
                    method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->
 
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$socio->nome}}" placeholder="Enter name">

                            <label for="c">Cartão de Cidadão</label>
                            <input type="text" class="form-control" id="cc" name="cc" value="{{$socio->cc}}" placeholder="Cartão de Cidadão">

                            <label for="morada">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada" value="{{$socio->morada}}" placeholder="Morada">

                            <label for="codpostal">Codigo Postal</label>
                            <input type="text" class="form-control" id="codpostal" name="cod_postal" value="{{$socio->cod_postal}}" placeholder="Codigo Postal">

                            <label for="localidade">Localidade</label>
                            <input type="text" class="form-control" id="localidade" name="localidade" value="{{$socio->localidade}}" placeholder="Localidade">

                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$socio->telefone}}" placeholder="Telefone">

                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$socio->email}}" placeholder="Enter Email">
                        </div>
           
 
                        <button type="submit" class="btn btn-outline-primary">Gravar</button>
                    </form>
 
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection