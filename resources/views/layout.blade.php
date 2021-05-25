<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="">
    <meta name="author" content="Peter Quispe Mendoza">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        @include('partials.nav')
    </header>
    <div class="container">
    @include('partials.session_status')
    </div>
    
    @yield('content')
    <script type="text/javascript" src="{{ asset('js/app.js')}}" defer></script>
</body>
</html>