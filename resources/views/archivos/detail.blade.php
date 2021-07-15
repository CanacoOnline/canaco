@section('title', $producto['title'])
<x-app-layout>
    @if($producto->tipo=='Promocion')
    @include('archivos.detailPromocion')
    @else
    <main class="layoutDetalle bg-white marTB10 borde">
        <div class="detalleHeader flex wrap gap10 pad10 marT20 justify-content-center">
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad" src="{{url('/miniatura/'.$producto->image)}}" onclick="showImg(this);" />
            </div>
            @if($producto->image2!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image2)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image3!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image3)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image4!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image4)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image5!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image5)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image6!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image6)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image7!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image7)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
            @if($producto->image8!=null)
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="{{url('/miniatura/'.$producto->image8)}}"
                    onclick="showImg(this);" />
            </div>
            @endif
        </div>
        <div class="detalleImg">
            <div class="cont450 flex align-items-center ">
                <img id="expandedImg" class="pad20 imgAlign wFull" src="{{url('/miniatura/'.$producto->image)}}">
            </div>
        </div>
        <div class="detalleInfo mar10 pad20 rel">
            <h1 class="txtB tam36 bold600">{{$producto->title}}</h1>
            @if($producto->precio!=null)
            <h3 class="bold200 tam18">$ {{$producto->precio}}</h3>
            @endif
            @if($producto->description!=null)
            <p class="marT20 tam14">{{$producto->description}}</p>
            @endif
            <div class="tam24 lineaO borde pad10 marT30 grid gap10">
                <p>Datos de la empresa</p>
                @if($producto->user->ubicacion!==null)
                <p class="tam18"><i class="fas fa-map-marker-alt txtO"></i> {{$producto->user->ubicacion}}</p>
                @endif
                @if($producto->user->telefono!==null)
                <a href="tel+{{$producto->user->telefono}}">
                    <p class="tam18"><i class="fas fa-phone-square-alt txtO"></i> {{$producto->user->telefono}}</p>
                </a>

                @endif
                @if($producto->user->horario!==null)
                <p class="tam18"><i class="fas fa-clock txtO"></i> {{$producto->user->horario}}</p>
                @endif
                <div class="divCenter">
                    @if ($producto->user->pagweb!==null)
                    <a href="{{$producto->user->pagweb}}" target="_blank"><i
                            class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                    @endif
                    @if ($producto->whatsapp!==null)
                    <a href="https://wa.me/{{$producto->whatsapp}}" target="_blank"><i
                            class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
                    @endif
                    @if ($producto->user->facebook!==null)
                    <a href="{{$producto->user->facebook}}" target="_blank"><i
                            class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                    @endif

                    @if ($producto->user->instagram!==null)
                    <a href="{{$producto->user->instagram}}" target="_blank"><i
                            class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                    @endif

                    @if ($producto->user->instagram!==null)
                    <a href="{{$producto->user->twitter}}" target="_blank"><i
                            class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                    @endif
                </div>

            </div>
        </div>
        <div class="detalleFooter bg-blue flex divEnd">
            <a href="{{route('getUserDetail', ['user_id' => $producto->user->id]) }}">
                <p class="hvrUnderline hand txtW block marR30">Por {{$producto->user->name}}</p>
            </a>
        </div>
    </main>
    @endif
    @include('navMenu.comentarios')

</x-app-layout>