@extends('site.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">



                <div class="card-header">Detalhes da Editora {{$editora->nome}}</div>
                <div>
                <a href="{{route('editora.edit', $editora->id)}}" class="btn btn-outline-warning">Editar</a>
                <a href="{{route('editora.confirma_delete_editora', $editora->id)}}" class="btn btn-outline-danger">Excluir</a>
                </div>
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Código#</th>
                            <th scope="col">Nome</h>
                            <th scope="col">Morada</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Contribuinte</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{$editora->id}}</th>
                            <td>{{$editora->nome}}</td>
                            <td>{{$editora->morada}}</td>
                            <td>{{$editora->telefone}}</td>
                            <td>{{$editora->contribuinte}}</td>

                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-outline-dark"><a href="{{route('editora.index', Auth::user()->id)}}">Voltar atras</a></button>
            </div>
        </div>
    </div>
</div>
@endsection