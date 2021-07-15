<h2 class="tamMediano txtGray marT10">Cupones más visitados</h2>
<main class="w100 txtCenter">
    <div class="rankingProducts gap10 rel txtCenter">
        @foreach($cupones as $aux)
        @if($aux->tipo=='Cupon')
        <div class="bg-white panelNormal rel bordeTL minW225">
            @if(Storage::disk('images')->has($aux->image))
            <div class=" lineaBotGris contCenter frm100">
                <a href="{{ route('detailProducto', ['producto_id' => $aux->id]) }}" class="h225 contCenter">
                    <img class="wFull imgAlign maxH225 " src="{{url('/miniatura/'.$aux->image)}}" />
                </a>
            </div>
            @endif
            <!--    Info    -->
            <h3 class="txtCenter frm100">
                <a class="txtB bold600" href="">{{$aux->title}}</a>
            </h3>

            <p class="pad10 tamNormal marB40">{{$aux->description}}</p>

            <div class="panelGuardar flex lineaTopGris">
                <a href="{{route('getUserDetail', ['user_id' => $aux->user->id]) }}" class="wIcon divCenter">
                    <i class="far fa-user txtB hvrOrange"></i>
                </a>
                <div class="wMore divCenterJA bg-orange hvrBorde txtW">
                    <a href="{{ route('detailProducto', ['producto_id' => $aux->id]) }}" class="padLR30 ">Ver más</a>
                </div>
                <a href="" class="wIcon divCenter">
                    <i class="far fa-heart txtB hvrOrange"></i>
                </a>
            </div>
            @if ($aux->precio!==null)
            <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">${{$aux->precio}}</p>
            @endif
        </div>
        @endif
        @endforeach
    </div>
</main>