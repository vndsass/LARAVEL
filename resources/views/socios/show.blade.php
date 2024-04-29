@extends('site.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                

                <div class="card-header">Detalhes do socio {{$socio->nome}}</div>
                <a href="{{route('socio.edit', $socio->id)}}" class="btn btn-outline-warning">Editar</a>
                <a href="{{route('socio.confirma_delete', $socio->id)}}" class="btn btn-outline-danger">Excluir</a>
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Código#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cartao de Cidadao</th>
                            <th scope="col">Morada</th>
                            <th scope="col">Cod Postal</th>
                            <th scope="col">Localidade</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{$socio->id}}</th>
                            <td>{{$socio->nome}}</td>
                            <td>{{$socio->cc}}</td>
                            <td>{{$socio->morada}}</td>
                            <td>{{$socio->cod_postal}}</td>
                            <td>{{$socio->localidade}}</td>
                            <td>{{$socio->email}}</td>
                            <td>{{$socio->telefone}}</td>

                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-outline-dark"><a href="{{route('socio.index', Auth::user()->id)}}">Voltar atras</a></button>
            </div>
        </div>
    </div>
</div>
@endsection