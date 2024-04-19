@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Eliminação do Sócio') }}</div>

                <div class="card-body">
                    <p>Confirma a eliminição deste sócio?</p>
                    <p><strong>Atenção: O sócio será eliminado definitivamente</strong></p>
                    <form action="{{route('socio.destroy', $id->id)}}" method="post">
                    @csrf
                    @method('DELETE')    
                    <button class="btn btn-secondary-danger" type="delete" value="limpar">Eliminar definitivamente</button>   
                    <a href="{{route('socio.show',$id->id)}}">Voltar</a>                            
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
