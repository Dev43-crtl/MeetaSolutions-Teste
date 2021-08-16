@extends('site.layouts.basico')

@section('conteudo')
<div class="cadastrar card" id="cadastrar">
    <div class="card-header">
        <h3 class="card-title">Cadastar Usuário</h3>
    </div>
    <div class="card-body">
        {{ $msg ?? ''}}
        <form method="post" action="{{ route('app.usuarios.adicionar') }}">
            <input type="hidden" name="id" value="{{ $usuario->id ?? '' }}" >
            @csrf
            <label class="form-label">Nome:</label>
            <div class="input-group mb-2">
                <input class="form-control" type="text" name="name" value={{ $usuario->name ?? old('name')}}>
                {{ $errors->has('name') ? $errors->first('name') : '' }}
            </div>
            <label class="form-label">UserName: </label>
            <div class="input-group mb-2 ">
                <input class="form-control" type="text" name="username" value={{ $usuario->username ?? old('username')}} >
                {{ $errors->has('username') ? $errors->first('username') : '' }}
            </div>
            <label class="form-label">Password: </label>
            <div class="input-group mb-3">
                <input class="form-control" type="password" name="password" value={{ $usuario->password ?? old('password')}} >
                {{ $errors->has('password') ? $errors->first('password') : '' }}
            </div>
            <button type="submit" name="acao" class="btn btn-primary btn-rounded">Salvar</button>
        </form>
    </div>
</div>
@endsection