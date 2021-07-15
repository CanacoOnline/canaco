<x-app-layout>
    <main class="marTB10">
        <h2 class="tamMediano txtGray">Empresas participantes</h2>
        <div class="divCenter flex wrap gap10">

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/ansautos">
                        <img class="maxH225" src="{{ asset('images\LogosSueltos\AutosNacionalesDeSonora.jpeg') }}"
                            alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/pasteleria">
                        <img class="maxH225" src="{{ asset('images/Pasteleria/LOGO.jpg') }}" alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/mirsa">
                        <img class="maxH225" src="{{ asset('images/mirsa/img10.jpg') }}" alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/marques">
                        <img class="maxH225" src="{{ asset('images/Marques/LogoMarques.png') }}" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/intactics">
                        <img class="maxH225" src="{{ asset('images\intactics\logoIntactics.jpeg') }}" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="{{ asset('images/Bura/logobura.jpeg') }}" alt="" style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225"
                            src="{{ asset('images\Aseguradoras\Axa\WhatsApp Image 2021-01-22 at 6.03.31 PM.jpeg') }}"
                            alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="{{ asset('images\Aseguradoras\Nogales Insurance\logo.jpg') }}" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="{{ asset('images/Reyla.png') }}" alt="" style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="{{ asset('images\LogosSueltos\cempa.jpeg') }}" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            @foreach ($usuario as $usuarios)
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center justify-content-center">
                    @if($usuarios->profile_photo_path!=null)
                    <a href="{{route('getUserDetail', ['user_id' => $usuarios->id]) }}"><img
                            src="/storage/{{$usuarios->profile_photo_path}}" alt="" style="width:100%"
                            class="maxH225"></a>
                    @else
                    <a href="{{route('getUserDetail', ['user_id' => $usuarios->id]) }}"><img
                            src="{{ asset('images\avatar.png') }}" alt="" style="width:100%" class="maxH225"></a>
                    @endif
                   
                </div>
                <p class="txtCenter txtB tam14">{{$usuarios->name}}</p>
            </div>
            @endforeach
        </div>

    </main>

</x-app-layout>