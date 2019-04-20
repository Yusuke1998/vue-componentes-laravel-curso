<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div id="app">
                        <h2 class="text-center">Captura tus ideas</h2>
                        <div class="well">
                            <h4>En que estas pensando?</h4>
                            <form method="post" accept-charset="utf-8">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" maxlength="256" placeholder="Escribe tu idea">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-sm">Agregar</button>
                                    </span>
                                </div>
                            </form>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                <p>
                                    <small class="text-muted">
                                        <em>Hace un minuto</em>
                                    </small>
                                    Estudiar...
                                </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
