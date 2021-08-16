<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand text-secondary" href="{{ route('site.index') }}">MeetaSolutions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="menu-principal" class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" ref_sys="sobre" href="{{ route('site.sobre')}}" >Sobre <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link "  ref_sys="cadastrar_usuario" href="{{ route('app.usuarios.cadastrar')}}">Cadastrar Usuário <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link " ref_sys="lista_usuario" href="{{ route('app.usuarios.lista')}}">Lista Usuário <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
        <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link active"  href="{{ route('site.loggout') }}">Sair</span></a>
        </li>
        </ul>
    </div>
    </div>
</nav>

<section class="painelControle">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3><i class="fas fa-cog"></i> Painel de controle</h3>
            </div>
        </div>
    </div>
</section><!--painelControle-->