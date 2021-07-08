<main class="w100 bg-white marTB10 mainPromo">
    <div class="flex align-items-start leftPromo rel">
        <div class="mar10 pad20 rel">
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
                <a href="tel:+{{$producto->user->telefono}}"><p class="tam18"><i class="fas fa-phone-square-alt txtO"></i> {{$producto->user->telefono}}</p></a>
                @endif
                @if($producto->user->horario!==null)
                <p class="tam18"><i class="fas fa-clock txtO"></i> {{$producto->user->horario}}</p>
                @endif
                <div class="divCenter">
                    @if ($producto->user->pagweb!==null)
                    <a href="{{$producto->user->pagweb}}" target="_blank"><i
                            class="fas fa-globe pad10 txtB hvrBorde"></i></a>
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
    </div>
    <div class="flex align-items-center rightPromo w70 pad10">
        <img class="w100" src="{{url('/miniatura/'.$producto->image)}}">
    </div>
</main>