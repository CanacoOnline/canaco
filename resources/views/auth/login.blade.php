<x-app-layout>


<main class="contMain">
    <div class="contLogin">
        <!-- Panel Login -->
        <div class="panelPrimario">
            <header class="tituloLogin">
                <h2 class="txtB tam36">Login</h2>
            </header>


            <form method="POST" action="{{ route('login') }}" class="formLogin w-9/12">
                @csrf
                <div class="flex justify-start items-center w-full">
                    <i class="fas fa-envelope iconInput"></i>
                    <input id="email" type="text" class="w-full typeLinea lineaO padL30" placeholder="Email"
                        name="email" required autofocus>
                        
                </div>

                <div class="flex justify-start items-center w-full">
                    <i class="fas fa-lock iconInput"></i>
                    <input id="password" type="password" class="w-full typeLinea lineaO padL30" placeholder="Contraseña"
                        name="password" required autocomplete="current-password">
                </div>
                
                <div class="flex justify-center"> 
                    @if ($errors->has('email'))
                        <span class="txtRojo">
                            <strong>El email y/o la contraseña son incorrectos.</strong>
                        </span>
                    @endif 
                </div>

                <button type="sumbit" class="btnAceptarLogin">Aceptar</button>
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
               
            </form>

            <footer class="footerLogin">
                @if (Route::has('password.request'))
                <a class="text-sm txtO" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
                @endif
                <a class="textFooter-Login" href="{{ route('register') }}">Registrarse</a>
            </footer>
        </div>

        <!-- Panel Secundario -->
        <div class="panelSecundario ">
            <div class="logomerca">
                <img src="{{ asset('iconos/CanacoOnline.png') }}" alt="logo" style="width:100%;">
            </div>
            <div class="descripcionSecundario">
                <p>Comercio Local, Experiencia Total</p>
            </div>
            <div class="redes">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</main>
</x-app-layout>
