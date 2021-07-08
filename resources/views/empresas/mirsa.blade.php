@section('title', 'MirsaTile')
<x-app-layout>
    <main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100" src="{{ asset('images/mirsa/img10.jpg') }}" alt="" />
                    <h1 class="txtB tamGrande frm100">Mirsa Tile</h1>
                </div>
                <div class="divCenter contInfo">
                   

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://www.mirsatile.com" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>

                        <a href="https://web.facebook.com/mirsatileandhomedecor" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> 631 319 4022</span>
                    </p>

                    <p class=" divCenter frm100 txtB tamNormal"><i class="fas fa-map-marker-alt txtO tam18 pad5"></i>
                        <span class="">
                            Ave Ruiz Cortines #1005, Col.
                            Municipal <br>
                            Nogales SON MX CP84035</span>
                    </p>
                    <p class=" divCenter frm100 txtB tamNormal"><i class="fas fa-clock txtO tam18 pad5"></i> <span
                            class="">
                            Horario Lun-Vie 9-6pm, Sab 9-4pm</span>
                    </p>
                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img1.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img2.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img3.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img4.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img5.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img6.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img7.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img8.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img9.jpg') }}" alt="" style="width:100%">
            </div>
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/mirsa/img10.jpg') }}" alt="" style="width:100%">
            </div>
        </div>
    </main>

</x-app-layout>