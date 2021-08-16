<div class="col-md-3">
    <div class="list-group">
        <a href="{{ route('site.sobre')}}" class="list-group-item {{ request()->is('sobre') ? 'active' : '' }}" ref_sys="sobre"><i class="fas fa-pen"></i> Sobre</a>
        <a href="{{ route('app.usuarios.cadastrar')}}" class="list-group-item {{ request()->is('usuarios/cadastrar') ? 'active' : '' }}" ref_sys="cadastrar_usuario"><i class="fas fa-pen"></i> Cadastrar Usuário</a>
        <a href="{{ route('app.usuarios.lista')}}"class="list-group-item {{ request()->is('usuarios/lista') ? 'active' : '' }}" ref_sys="lista_usuario"><i class="fas fa-list"></i> Lista Usuário </a>
    </div>
</div>
        
