
@section('title', 'Gabys Cake')
<x-app-layout>
<main class="grid gap10 ">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB h45">

            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100" src="{{ asset('images/Pasteleria/LOGO.jpg') }}"
                        alt="" />
                    <h1 class="txtB tamGrande frm100">La pastelería: By Gaby's Cake</h1>
                </div>
                <div class="divCenter contInfo">


                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tam24">Contacto</h2><br>
                    </div>
                    <div class="divCenter tam24 frm100">
                        <a href="https://web.facebook.com/lapasteleriabygabyscake" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>

                    </div>
                    <p class=" divCenter frm100 txtB"><i class="fas fa-phone-square-alt txtO tam18 pad5"></i> <span
                            class=""> 631 167 1985</span>
                    </p>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">
        <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">
                <img src="{{ asset('images/Pasteleria/IMG-20210122-WA0067.jpg')}}" alt="" style="width:100%">
            </div>    
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">                                    
                <img src="{{ asset('images/Pasteleria/IMG-20210122-WA0068.jpg')}}" alt="" style="width:100%">
            </div>  
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">                                    
                <img src="{{ asset('images/Pasteleria/IMG-20210122-WA0069.jpg')}}" alt="" style="width:100%">
            </div>  
            <div class="panelMediano borde boxShadow marTB10 pad10 inlineBlock">                                    
                <img src="{{ asset('images/Pasteleria/IMG-20210122-WA0070.jpg')}}" alt="" style="width:100%">
            </div> 
        </div>
    </main>
    </x-app-layout>
