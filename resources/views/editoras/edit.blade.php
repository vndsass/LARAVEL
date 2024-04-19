@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição da Editora {{$editora->name}}
                
                </div>
 
                <div class="card-body">
                    <form action="{{route('editora.update', $editora->id)}}"
                    method="post">
                        @csrf
                        <!-- segurança para utilizar forms -->
                        @method('PUT')
                        <!-- para edição de dados -->
 
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$editora->nome}}" placeholder="Enter name">

                            
                            <label for="morada">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada" value="{{$editora->morada}}" placeholder="Morada">

                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$editora->telefone}}" placeholder="Telefone">

                            <label for="contribuinte">Contribuinte</label>
                            <input type="text" class="form-control" id="contribuinte" name="contribuinte" value="{{$editora->contribuinte}}" placeholder="Contribuinte">
                        </div>
           
 
                        <button type="submit" class="btn btn-outline-primary">Gravar</button>
                    </form>
 
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection