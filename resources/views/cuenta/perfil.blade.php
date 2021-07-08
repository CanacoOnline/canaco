<x-app-layout>
@if($usuario->rol_id==2)
    <main class="grid gap10">
        <main class="boxShadowLight marT10">
            <div class="bgB h45">
            </div>
            <!-- Foto Perfil -->
            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    @if($usuario->profile_photo_path!=null)
                    <img class="avatarNormal divCenter frm100 object-cover"
                        src="/storage/{{$usuario->profile_photo_path}}" alt="{{ $usuario->name }}" />
                    @else
                    <img class="avatarNormal divCenter frm100 object-cover" src="{{ asset('images\avatar.png') }}"
                        alt="{{ $usuario->name }}" />
                    @endif
                    <h1 class="txtB tamGrande frm100 bold600">{{ $usuario->name }}</h1>
                </div>
                <div class="divCenter contInfo">
                    <div class="divCenter contInfo">
                        <div class="divCenter frm100">
                            <h2 class="txtO tamMediano bold700">Sobre nosotros</h2><br>
                        </div>
                        <div class="divCenter frm100">
                            <p class="txtB tamNormal">{{$usuario->descripcion}}</p>
                        </div>

                    </div>
                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Contacto</h2><br>
                    </div>
                    <div class="divCenter tamMediano frm100">
                        @if ($usuario->pagweb!==null)
                        <a href="{{$usuario->pagweb}}" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                        @endif

                        @if ($usuario->whatsapp!==null)
                        <a href="https://wa.me/+52{{$usuario->whatsapp}}" target="_blank"><i
                                class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
                        @endif
                        @if ($usuario->facebook!==null)
                        <a href="{{$usuario->facebook}}" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                        @endif

                        @if ($usuario->instagram!==null)
                        <a href="{{$usuario->instagram}}" target="_blank"><i
                                class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                        @endif

                        @if ($usuario->twitter!==null)
                        <a href="{{$usuario->twitter}}" target="_blank"><i
                                class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                        @endif
                    </div>


                    <p class="divCenter frm100 txtB tamNormal"><i class="fas fa-map-marker-alt txtO tam18 pad5"></i>
                        <span class="txtGay">
                            {{$usuario->ubicacion}}</span>
                    </p>
                    <a href="tel:+{{$usuario->telefono}}">
                        <p class="divCenter frm100 txtB tamNormal"><i
                                class="fas fa-phone-square-alt txtO tam18 pad5"></i>
                            <span class="txtGay"> {{$usuario->telefono}}</span>
                        </p>
                    </a>
                    @if ($usuario->horario!==null)
                    <p class="divCenter frm100 txtB tamNormal"><i class="fas fa-clock txtO tam18 pad5"></i> <span
                            class="txtGay"> {{$usuario->horario}}</span>
                    </p>
                    @endif
                </div>
            </div>
        </main>


        <div class="divSpaceA gap10">
            @foreach($productos as $aux)
            @if($usuario->id == $aux->user->id)
            <div class="bg-white panelProd rel bordeTL boxShadowT1">
                <!--    Imagen  -->
                @if(Storage::disk('images')->has($aux->image))
                <div class="imgPanel">
                    <a href="{{ route('detailProducto', ['producto_id' => $aux->id]) }}">
                        <img class="wFull maxH270" src="{{url('/miniatura/'.$aux->image)}}" />
                    </a>
                </div>
                @endif
                <!--    Info    -->
                <h3 class="txtCenter">
                    <a class="txtB"
                        href="{{ route('detailProducto', ['producto_id' => $aux->id]) }}">{{$aux->title}}</a>
                </h3>
                @if ($aux->description!==null)
                <p class="pad10 marB20 tamNormal">{{$aux->description}}</p>
                @endif

                @if ($aux->precio!==null)
                <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">${{$aux->precio}}</p>
                @endif
                <a href="" class="">
                    <p class="tamNormal createByBottom txtB">Por {{$aux->user->name.' '.$aux->user->surname}}</p>
                </a>
            </div>
            @endif
            @endforeach

            <div class="dir">
                {{$productos->links()}}
            </div>

        </div>


    </main>
@else
<p class="txtB tam24 divCenter mar10">Esta cuenta no existe o no cuenta con suscripción activa.</p>
<a href="/" class="txtO tam24 divCenter">Volver al inicio.</a>
@endif
</x-app-layout>