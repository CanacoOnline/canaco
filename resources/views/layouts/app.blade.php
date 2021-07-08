<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Icono -->
    <link rel="icon" href="{{ asset('iconos/canaco.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/buraStyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contacto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contPerfil.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loginregistro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contImageProductos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/imageHorizontal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panelProductos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="contenedor">
        <header class="header">
            <div class="iconMenu">
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar"><i class="fas fa-bars "></i></label>

                <!-- Authentication Links -->
                @if (Auth::guest())
                <nav class="menu">
                    <li class="pad5"><a class="hvrUnderline txtW" href="{{ route('login') }}">Ingresar</a></li>
                    <li class="pad5"><a class="hvrUnderline txtW" href="{{ route('register') }}">Registrarse</a></li>
                    <li class="pad5"><a class="hvrUnderline txtW" href="/conocenos">Conocenos</a></li>
                </nav>
                @else
                <nav class="menu contCenter">
                    @if (Auth::user()->rol_id == 1)
                    <li class="pad5"><a class="hvrUnderline txtW" href="/admin">{{ Auth::user()->name }}</a></li>
                    @endif

                    @if (Auth::user()->rol_id == 2)
                    <x-jet-dropdown allign="right" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="focus:outline-none transition divCenter bgNone">
                                @if( Auth::user()->profile_photo_path!=null)
                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="/storage/{{Auth::user()->profile_photo_path}}"
                                    alt="{{ Auth::user()->name }}" />
                                @else
                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="{{ asset('images\avatar.png') }}"
                                    alt="{{ Auth::user()->name }}" />
                                @endif
                            </button>

                            <p class="txtW tam14 hand ">{{ Auth::user()->name }}</p>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar Cuenta') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('empresa') }}">
                                <i class="fas fa-user txtB"></i>{{ __(' Perfil') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="/user/profile">
                                <i class="fas fa-user-edit"></i>{{ __(' Editar Perfil') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="/subirProducto">
                                <i class="fas fa-upload txtB"></i>{{ __(' Subir Producto') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif
                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt txtB"></i>{{ __(' Cerrar sesión') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>

                    @endif
                    @if (Auth::user()->rol_id == 3)
                    <li class="pad5"><a class="hvrUnderline txtW" href="/consumidor">{{ Auth::user()->name }}</a></li>
                    @endif
                </nav>
                @endif



            </div>

            <div class="logoMerca">
                <a class="navbar-brand" href="/">
                    <img class="imgMerca" src="{{ asset('iconos/CanacoOnline.png') }}" alt="logo"></a>
            </div>
            <div class="logoCanaco">
                <a class="navbar-brand" href="https://canaconogales.com.mx/contacto/" target="_blank">
                    <img class="imgCanaco" src="{{ asset('iconos/IconoCanaco.png') }}" alt="logo"></a>
            </div>

            <form class="buscar" role="search" action="{{ url('/search') }}">
                <span class="buscador"><i class="fa fa-search"></i>
                    <input class="inputBuscar" type="search" id="search" placeholder="Buscar..." name="search" />
                </span>
            </form>

            <ul class="nav">
                <div class="categorias">
                    <!-- Comercio -->
                    
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/empresas-participantes">Empresas
                            participantes</a></li>
                         
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/promociones">Promociones</a></li>
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/cupones">Cupones</a></li>
                </div>
            </ul>

        </header>
        <div class="hehe"></div>
    </div>

    <!-- Page Content -->
    <main class="full hojaNormal">
        {{ $slot }}
    </main>

    @include('destacado.footer')

    @stack('modals')

    @livewireScripts

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8f25d8b894.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/buscador.js') }}"></script>
    <script src="{{ asset('js/preview.js') }}"></script>
    <script src="{{ asset('js/images.js') }}"></script>
    <script src="{{ asset('js/imgGallery.js') }}"></script>

</body>

</html>