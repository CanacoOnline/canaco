<x-app-layout>

    <main class="grid gap10">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB flex">
                @if(Auth::user()->dias<=7) <div class="tamNormal">
                    <p class="txtW pad10">Su membrecia esta a punto de expirar. Expirará el día: {{Auth::user()->dias}}
                    </p>
            </div>
            @endif
            <div class="tamNormal panelVacio divEnd">
                <li>
                    <a class="hvrUnderline txtW pad5 marT5 " href="/user/profile"> Editar perfil
                        <i class="fas fa-user txtO"></i>
                    </a>
                </li>
                @if(Auth::user()->rol_id != 3)
                <li>
                    <a class="hvrUnderline txtW pad5 marT5" href="/subirProducto"> Subir Producto
                        <i class="fas fa-upload txtO"></i>
                    </a>
                </li>
                @endif
                <li>
                    <a class="hvrUnderline txtW pad5 marT5" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Cerrar sesión <i class="fas fa-sign-out-alt txtO"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </div>
            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                @if( Auth::user()->profile_photo_path!=null)
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100 object-cover"
                        src="storage/{{Auth::user()->profile_photo_path}}"
                        alt="storage/{{Auth::user()->profile_photo_path}}" />
                    <h1 class="txtB tamGrande frm100 bold600">{{ Auth::user()->name }}</h1>
                </div>
                @else
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100 object-cover" src="{{ asset('images\avatar.png') }}">
                    <h1 class="txtB tamGrande frm100 bold600">{{ Auth::user()->name }}</h1>
                </div>
                @endif

                <div class="divCenter contInfo">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Sobre nosotros</h2><br>
                    </div>
                    <div class="divCenter frm100">
                        <p class="txtB tamNormal">{{Auth::user()->descripcion}}</p>
                    </div>

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Contacto</h2><br>
                    </div>
                    <div class="divCenter tamMediano frm100">
                        @if (Auth::user()->pagweb!==null)
                        <a href="{{Auth::user()->pagweb}}" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                        @endif
                        @if (Auth::user()->whatsapp!==null)
                        <a href="https://wa.me/{{Auth::user()->whatsapp}}" target="_blank"><i
                                class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
                        @endif
                        @if (Auth::user()->facebook!==null)
                        <a href="{{Auth::user()->facebook}}" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                        @endif

                        @if (Auth::user()->instagram!==null)
                        <a href="{{Auth::user()->instagram}}" target="_blank"><i
                                class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                        @endif

                        @if (Auth::user()->twitter!==null)
                        <a href="{{Auth::user()->twitter}}" target="_blank"><i
                                class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                        @endif
                    </div>
                    <p class=" divCenter frm100 txtB tamNormal align-items-end"><i
                            class="fas fa-map-marker-alt txtO tam18 pad5"></i>
                        <span class="txtGray">
                            {{Auth::user()->ubicacion}}</span>
                    </p>
                    <a href="tel:+{{Auth::user()->telefono}}">
                        <p class="divCenter frm100 txtB tamNormal align-items-end"><i
                                class="fas fa-phone-square-alt txtO tam18 pad5"></i>
                            <span class="txtGray"> {{Auth::user()->telefono}}</span>
                        </p>
                    </a>

                    @if (Auth::user()->horario!==null)
                    <p class=" divCenter frm100 txtB tamNormal align-items-end"><i
                            class="fas fa-clock txtO tam18 pad5"></i> <span class="txtGray">
                            {{Auth::user()->horario}}</span>
                    </p>
                    @endif

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">

            @foreach($productos as $aux)
            @if(Auth::check() && Auth::user()->id == $aux->user->id)
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
                <p class="pad10  tamNormal">{{$aux->description}}</p>
                @endif
                <p class="tamNormal createByBottom ">Por {{$aux->user->name.' '.$aux->user->surname}}</p>
                @if ($aux->precio!==null)
                <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">${{$aux->precio}}</p>
                @endif
                <!-- <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">${{$aux->created_at->diffForHumans()}}</p> -->
                @if (Auth::guest())
                @else
                <!--    Botones     -->
                @if(Auth::check() && Auth::user()->id == $aux->user->id || Auth::user()->rol_id == 1)
                <div class="mar10 txtRight marB30">
                    <a href="{{ route('productoEdit', ['producto_id' => $aux->id]) }}"
                        class="pad5  typeRadio fillBlue hvrBorde">Editar</a>
                    <a href="{{ route('productoDelete', ['img_id' => $aux->id]) }}"
                        class="pad5  typeRadio fillRojo hvrBorde"
                        onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                </div>
                @endif
                @endif
            </div>
            @endif
            @endforeach

            <div class="dir w100">
                {{$productos->links()}}
            </div>


        </div>


    </main>
</x-app-layout>