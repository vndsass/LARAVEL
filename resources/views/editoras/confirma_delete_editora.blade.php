@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Eliminação da Editora') }}</div>

                <div class="card-body">
                    <p>Confirma a eliminição desta editora?</p>
                    <p><strong>Atenção: A editora será eliminada definitivamente</strong></p>
                    <form action="{{route('editora.destroy', $id->id)}}" method="post">
                    @csrf
                    @method('DELETE')    
                    <button class="btn btn-secondary-danger" type="submit" value="limpar">Eliminar definitivamente</button>   
                    <a href="{{route('editora.show',$id->id)}}">Voltar</a>                            
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
