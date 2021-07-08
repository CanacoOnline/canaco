<x-app-layout>
    <main class="contMain">
        <div class="contLogin">
            <!-- Panel Login -->
            <div class="panelPrimario">
                <header class="tituloLogin">
                    <h2 class="tam36 txtB txtCenter">Registrar Empresa</h2>
                </header>

                <form method="POST" action="{{ route('register') }}" class="formLogin">

                    @csrf
                    @include('flash-message')
                    <!-- Datos Comerciales -->
                    <br>
                    <h2 class="tam24 txtB">Datos comerciales</h2><br>
                    <!-- Nombre -->
                    <div class="form-login">
                        <label for="name" class="etiquetas">Nombre</label>
                        <input id="name" type="text" class="frm100 typeLinea lineaO" name="name" :value="old('name')"
                            required autofocus autocomplete="name">
                        @if ($errors->has('name'))
                        <strong>
                            <p class="txtRojo tam14">Este nombre ya existe.</p>
                        </strong>
                        @endif
                    </div>

                    <!-- Ubicación -->
                    <div class="form-login">
                        <label for="ubicacion" class="etiquetas">Ubicación</label>
                        <input id="ubicacion" type="text" class="frm100 typeLinea lineaO" name="ubicacion" required
                            :value="old('ubicacion')">
                    </div>
                    <!-- Telefono -->
                    <div class="form-login">
                        <label for="telefono" class="etiquetas">Teléfono</label>
                        <input id="telefono" type="number" class="frm100 typeLinea lineaO" name="telefono" required
                            :value="old('telefono')">
                    </div>

                    <!-- Datos de usuario -->
                    <br>
                    <h2 class="tam24 txtB">Datos del usuario</h2><br>
                    <div class="form-login">
                        <label for="nombreUser" class="etiquetas">Nombre</label>
                        <input id="nombreUser" type="text" class="frm100 typeLinea lineaO" name="nombreUser" required
                            :value="old('nombreUser')">
                    </div>
                    <!-- CodigoPostal -->
                    <div class="form-login">
                        <label for="telUser" class="etiquetas">Teléfono</label>
                        <input id="telUser" type="number" class="frm100 typeLinea lineaO" name="telUser" required
                            :value="old('telUser')">
                    </div>
                    <!-- Correo Electronico -->
                    <div class="form-login">
                        <label for="email" class="etiquetas">Correo Electrónico</label>
                        <input id="email" type="email" class="frm100 typeLinea lineaO" name="email" required>
                        @if ($errors->has('email'))
                        <strong>
                            <p class="txtRojo tam14">Este correo electrónico ya existe.</p>
                        </strong>
                        @endif
                    </div>
                    <!-- Contraseña -->
                    <div class="form-login">
                        <label for="password" class="etiquetas">Contraseña</label>
                        <input id="password" type="password" class="frm100 typeLinea lineaO" name="password" required
                            autocomplete="new-password">
                        @if ($errors->has('email'))
                        <strong>
                            <p class="txtRojo tam14">Las contraseñas no coinciden.</p>
                        </strong>
                        @endif
                    </div>

                    <div class="form-login">
                        <label for="password_confirmation" class="etiquetas">Confirmar Contraseña</label>
                        <input id="password_confirmation" type="password" class="frm100 typeLinea lineaO" placeholder=""
                            name="password_confirmation" required>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                        Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                        Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">

                        <!-- Crear Cuenta -->
                        <button type="submit" name="registrar" class="btnAceptarLogin ml-4">Crear Cuenta</button>
                    </div>
                </form>
                <footer class="footerLogin">

                </footer>
            </div>

            <!-- Panel Secundario -->
            <div class="panelSecundario">
                <div class="divCenter">
                    <p class="txtW tam24 marT50">Prueba gratuita por 7 días.</p>
                </div>
                <div class="logomerca">
                    <img src="{{ asset('iconos/CanacoOnline.png') }}" alt="" style="width:100%;">
                </div>
                <div class="descripcionSecundario">
                    <p>Comercio Local, Experiencia Total</p>
                </div>
                <div class="logocanaco">
                    <img src="{{ asset('images/CANACO/IconoCanaco.png') }}" alt="">
                </div>

            </div>
        </div>
    </main>


</x-app-layout>