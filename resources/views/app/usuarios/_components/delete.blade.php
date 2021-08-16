@extends('site.layouts.basico')

@section('conteudo')
    <form action="" method="post">
        @csrf
        <label for=""> Tem certeza que deseja excluir esse usuario?</label>
        <input type='text'  name="nome" value={{ $usuario->name}}>
        <button>Sim</button>
    </form>
@endsection