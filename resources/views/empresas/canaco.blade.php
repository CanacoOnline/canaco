@section('title', 'Canaco')
<x-app-layout>
    <main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100" src="{{ asset('images/CANACO/LOGO NUEVO.jpg') }}"
                        alt="" />
                    <h1 class="txtB tamGrande frm100">Canaco Servytur Nogales</h1>
                </div>
                <div class="divCenter contInfo">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Sobre nosotros</h2><br>
                    </div>
                    <div class="divCenter frm100">
                        <p class="txtB" style="text-align:justify;">CANACO SERVYTUR Nogales es un organismo no gubernamental y representativo de las
                            Empresas de Comercio, Servicios y Turismo establecidos en la Ciudad de Nogales, Sonora.</p>
                    </div>

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://canaconogales.com.mx" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>

                        <a href="https://www.facebook.com/Canaco.Servytur.Nogales" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> (631)314-5535</span>
                    </p>
                    <div class="contacto txtB">
                        <i class="fas fa-address-card tam18 txtO"></i><span class=""> ventas@canaconogales.com.mx</span>
                    </div>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">
            <div class="bg-white panelProd rel boxShadowT1">
                <!--    Imagen  -->
                <div class="imgPanel">
                    <img class="wFull" src="{{ asset('images/CANACO/canaco1.png') }}" />
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco2.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco3.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco4.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco5.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco6.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco7.png') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/CANACO/canaco8.png') }}" alt="" style="width:100%">
                </div>
            </div>
        </div>
    </main>

</x-app-layout>