<nav class="navbar navbar-expand-lg navbar-light shadow-lg p-3 mb-5 bg-light rounded">
    <a class="navbar-brand" href="/SAIFEMA/public/">
    <img class="img-fluid" src="{{asset('img/saifema.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
    SAIFEMA
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-pills">
            <li class="nav-item active {{setActive('home')}}">
                <a class="nav-link" href="{{route('home')}}">@lang('Home') <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{setActive('about')}}">
                <a class="nav-link" href="{{route('about')}}">@lang('About')</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('Productos')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('productos.index')}}">Ver Productos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('Pedidos')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('pedidos.index')}}">Ver Pedidos</a>
                </div>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('Detalles de Pedidos')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('detalle_pedidos.index')}}">View</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">@lang('Others')</a>
            </li>
            <li class="nav-item {{setActive('about')}}">
                <a class="nav-link" href="{{route('about')}}">@lang('About')</a>
            </li>
            <li class="nav-item dropdown">
                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">@lang('Logout')</a>
                </div>
                @else
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link {{setActive('login')}}" href="{{route('login')}}">@lang('Login')</a>
                </div>
                @endauth
            </li>
        </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>