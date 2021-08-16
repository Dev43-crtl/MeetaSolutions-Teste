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
    @include('site.layouts._partials.top')
        <section class="mainPage">
           <div class="container">
                <div class="row">
                    @include('site.layouts._partials.menu')
                    <div class="col-md-9">
                            @yield('conteudo')
                    </div>
                </div>
            </div>  
        </section>
    </body>
</html>