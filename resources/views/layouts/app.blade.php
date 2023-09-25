<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-success">
            <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/farmacia') }}">
              Farmacias de Guardia Abiertas HOY</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-success">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Inicio</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/farmacia" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Farmacias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/farmacia">Información</a></li>
            <li><a class="dropdown-item" href="/productos">Productos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/contact">Contacto</a>
        </li>
      </ul>

      </form>
    </div>
  </div>
</nav>
                    <ul class="navbar-nav me-auto">
                    <ul class="navbar-nav ms-auto">
                    
</ul>

                    <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceso') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn btn-success" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

<footer class="py-3 my-4 bg-success text-white">
<ul class="nav justify-content-center pb-3 mb-3">
<li class="nav-item"><a href="#" class="nav-link px-2 text-light ">Aviso legal</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-light">Política de Cookies</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-light">Política de Privacidad</a></li>
</ul>
<div class="text-white">
<p class="text-center </footer>">Copyright &copy; 2023 - <b>byBe@_Design</b> - Todos los Derechos Reservados.</p>
</div>
</footer>
    </div>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
