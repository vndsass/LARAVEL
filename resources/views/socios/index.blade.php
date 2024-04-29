@extends('site.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listar todos os sócios') }}</div>

                <div class="card-body">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Gestor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($socios as $socio)
                            <tr>
                                <th scope="row">{{$socio->id}}</th>
                                <td>{{$socio->nome}}</td>
                                <td>{{$socio->telefone}}</td>
                                <td>{{$socio->user->name}}</td>
                                <td>{{$socio->user->level}}</td>
                                <td><a href="{{route('socio.show', $socio->id)}}" class="btn btn-success">Visualizar</a></td>
                                
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection