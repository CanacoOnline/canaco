@section('title', 'Marques De Cima')
<x-app-layout>
    <main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100" src="{{ asset('images/Marques/LogoMarques.png') }}"
                        alt="" />
                    <h1 class="txtB tamGrande frm100">Marques De Cima</h1>
                </div>
                <div class="divCenter contInfo">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Sobre nosotros</h2><br>
                    </div>
                    <div class="divCenter frm100">
                        <p class="txtB" style="text-align:justify;">Ubicado en la nueva zona centrica de la ciudad,
                            cerca de nosotros encontrara todos los servicios
                            incluyendo la cercania al Consulado Americano.</p>
                    </div>

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://www.hotelmarquesdecima.com" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> (631)311 2000</span>
                    </p>
                    <div class="contacto txtB">
                        <i class="fas fa-address-card tam18 txtO"></i><span class="">
                            reservaciones@hotelmarquesdecima.com</span>
                    </div>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">
        <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/Marques/cuartoStandard.jpeg ') }}" alt="" style="width:100%">
                <h3>Habitación STANDARD</h3>
                <p>Habitación standar para maxima comodidad a un módico precio</p>
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/Marques/confort.jpeg ')}}" alt="" style="width:100%">
                <h3>Habitación CONFORT</h3>
                <p>Habitación CONFORT para tener una experiencia única</p>
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/Marques/suite.jpeg ')}}" alt="" style="width:100%">
                <h3>Habitación SUITE</h3>
                <p>Habitación SUITE para vivir la mejor de las experiencias con nosotros</p>
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/Marques/edificio.jpeg') }}" alt="" style="width:100%">
                <h3>Nuestras instalaciones</h3>
            </div>

        </div>
    </main>

</x-app-layout>