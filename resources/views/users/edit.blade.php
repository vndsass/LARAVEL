@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do utilizador {{($user->name)}}</div>

                <div class="card-body">
                    <form action="{{route('user.update', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" value="{{$user->name}}" class="form-control" id="nome" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de email</label>
                            <input type="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar o seu email, com ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" value="{{$user->password}}" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <label for="levelUser">Nível</label>
                            <br>
                            
                            <select name="level" id="">
                                <option value="{{$user->level}}" selected disabled></option>
                                <option value="admin">Administrador</option>
                                <option value="utilizador">Utilizador</option>

                            </select>
                        </div>
                        <button type="gravar" class="btn btn-secondary">Enviar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection