
@section('title', 'InTactics')
<x-app-layout>
<main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100" src="{{ asset('images\intactics\logoIntactics.jpeg') }}"
                        alt="" />
                    <h1 class="txtB tamGrande frm100">InTactics</h1>
                </div>
                <div class="divCenter contInfo">

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://www.intactics.com.mx" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>

                        <a href="https://web.facebook.com/Agencia.aduanal.transporte.usda.fda.mex.usa" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> (631) 341 0101</span>
                    </p>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> (520) 841 6706</span>
                    </p>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10 marT15">
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                <img src="{{ asset('images/intactics/img1.jpeg') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                <img src="{{ asset('images/intactics/img2.jpeg') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                <img src="{{ asset('images/intactics/img3.jpeg') }}" alt="" style="width:100%">
                </div>
            </div>
            <div class="bg-white panelProd rel boxShadowT1">
                <div class="imgPanel">
                <img src="{{ asset('images/intactics/img4.jpeg') }}" alt="" style="width:100%">
                </div>
            </div>
            
        </div>
    </main>

    </x-app-layout>
