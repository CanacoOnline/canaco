@section('title', 'Autos Nacionales Sonora')
<x-app-layout>
    <main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100"
                        src="{{ asset('images/LogosSueltos/AutosNacionalesDeSonora.jpeg') }}" alt="" />
                    <h1 class="txtB tamGrande frm100">ANS Autos</h1>
                </div>
                <div class="divCenter contInfo">

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://www.ansautos.mx" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>

                        <a href="https://www.facebook.com/ANSNogales" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class="txtGay"> (631) 313 77 33</span>
                    </p>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">
            <div class="bg-white panelProd rel boxShadowT1">
                <!--    Imagen  -->
                <div class="imgPanel">
                    <img class="wFull" src="{{ asset('images/ans/accord.jfif') }}" />
                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Accord EXL 2010</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/cityex.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">City EX 2018</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/ecoline.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Ecoline 2011</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/focus.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Focus HB 2013</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/focusse.jfif') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Fussion SE LUXURY PLUS 2016</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/highlander.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Highlander 2016</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/sentrabr.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Sentra BR 2020</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/crv.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Honda CR-V 2018</p>
                </h3>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                    <img src="{{ asset('images/ans/yariscore.jpg') }}" alt="" style="width:100%">

                </div>
                <h3 class="txtCenter">
                    <p class="txtB tam18 txtCenter">Yaris CORE 2017</p>
                </h3>
            </div>
        </div>
    </main>


</x-app-layout>