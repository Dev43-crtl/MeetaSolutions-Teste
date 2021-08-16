<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/style-basico.css') }}" >
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Painel de controle</title>
    </head>
    <body>
        <div class='container'>
            <div class="sobre mt-4" id="sobre">
                <div class="card-header alert-danger">
                    <h1 class="card-title text-center"> Você esta saido da Dashboard!!</h1>
                </div>
                <div class="card-body">
                    <h2><a href="{{route('site.index')}}">Clique aqui para retornar!</a> Ou feche a pagina para sair </h2> 
                </div>
            </div>
        </div>
    </body>
</html>