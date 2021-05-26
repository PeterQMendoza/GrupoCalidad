<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina no encontrada</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="">
    <meta name="author" content="Peter Quispe Mendoza">
    <link rel="icon" type="image/png" href="{{asset('img/saifema.png')}}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
    <nav class="bg-light pt-2 pb-3">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset('img/saifema.png')}}" style="width:50px;height:50px;">
            </div>
            <div class="col-11">
                <h3 class="text-dark">SAIFAMA</h3>
            </div>
        </div>
      </div>
    </nav>
    <div class="bg-light text-center pt-1">
      <div class="container">
        <img src="{{asset('img/fe-maestro.png')}}"class="img-thumbnail">
        <h1 class="display-2 pt-1 font-weight-bold">Error 4xx</h1>
        <h2 class="display-4 pt-1 pb-2">No hemos encontrado la pagina que estas buscando.</h2>
        <h3 >The page you are looking for might have <br> been removed</h3>
        <a href="/SAIFEMA/public/" class="btn btn-info mt-3 pt-2 pb-3 pr-4 pl-4">Velver al inicio</a>
      </div>
    </div>
  </header>
<script type="text/javascript" src="{{ asset('js/app.js')}}" defer></script>
</body>
</html>