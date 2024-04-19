@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listar todas editoras') }}</div>

                <div class="card-body">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Editora</th>
                                <th scope="col">Morada</th>
                               

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($editoras as $editora)
                            <tr>
                                <th scope="row">{{$editora->id}}</th>
                                <td>{{$editora->nome}}</td>
                                <td>{{$editora->morada}}</td>
                                
                                <td><a href="{{route('editora.show', $editora->id)}}" class="btn btn-success">Visualizar</a></td>
                                
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