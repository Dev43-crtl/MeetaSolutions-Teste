@extends('site.layouts.basico')

@section('conteudo')

<div class="lista card" id="lista">
    <div class="card-header">
        <h3 class="panel-title">Usuários Cadastrados: </h3>
    </div>
    <div class="card-body">
        <table  class="table table-striped table-bordered">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Username</th>
            <th>Excluir</th>
            <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $key => $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->username }}</td>
                <td><a class="btn btn-primary" href="{{ route('app.usuarios.softdelete', $usuario->id) }}">Excluir</a></td>
                <td><a class="btn btn-primary" href="{{ route('app.usuarios.editar' , $usuario->id) }}">Editar</a></td>
            </th>
            @endforeach
        </tbody>
        </table>
    {{$usuarios->links()}}    
    </div>
</div>

@endsection

