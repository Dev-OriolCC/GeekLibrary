<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca Geek</title>
        <link rel="shortcut icon" href="https://img2.pngio.com/home-ammar-sabil-geek-avatar-png-460_460.png" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(90deg, rgba(60,60,215,1) 9%, rgba(1,175,210,1) 100%);">
                <a class="navbar-brand" href="{{ route('index') }}"><h2><img class="mx-3" src="https://img2.pngio.com/home-ammar-sabil-geek-avatar-png-460_460.png" width="60px" height="60px" alt="">Biblioteca Geek</h2></a>
                <!-- Navbar content -->

                        <div class="col-sm-5 col-12  inline ">
                            <form class="d-flex" action="{{ route('index') }}" method="GET" >
                            
                                <input class="form-control me-2"  type="text" name="search" id="search" value="{{ request()->query('search') }}" placeholder="Ingresa un Autor, Titulo o Descripcion" aria-label="Search">
                                <button class="btn btn-dark" type="submit">Buscar</button>
                            </form>
                        </div>
                        <div class="col-sm-4 col-12 "></div>


                <ul class="navbar-nav  mr-auto " >
                    <div class="row">
                        
                        <div class="col-sm-6 inline">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <strong class="text-white">Administrar</strong>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('books.index') }}">Libros</a>
                                    @auth
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesión') }}
                                                </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    @else
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('login') }}" class="dropdown-item text-primary">Iniciar Sesión</a>
                                    <!-- <a class="dropdown-item text-danger" href="">Cerrar Sesión</a> -->
                                    @endauth
                                </div>
                            </li>
                        
                        </div>
                    </div><!--ROW-->
                </ul>
            </nav>
        
            <!-- Contenido Principal -->
            <div class="content">
                    <div class="container">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ session()->get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                @yield('content')
            </div>
            <!-- Footer  -->
            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    <span class="text-muted">Geek Compania© todos los derechos reservados.</span>
                </div>
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    </body>
</html>
