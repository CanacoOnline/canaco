<main class="marTB10">
    <h2 class="tamMediano txtGray">Empresas más visitadas</h2>
    <div class="rankingPerfil rel gap10 ">
        @foreach($usuario as $aux)
        <div class="bg-white h250 borde5">
            <div class="panelNormal borde5 h225 lineaBot flex align-items-center justify-content-center">
                @if($aux->profile_photo_path!=null)
                <a href="{{route('getUserDetail', ['user_id' => $aux->id]) }}"><img
                        src="/storage/{{$aux->profile_photo_path}}" alt="" style="width:100%" class="maxH225"></a>
                @else
                <a href="{{route('getUserDetail', ['user_id' => $aux->id]) }}"><img
                        src="{{ asset('images\avatar.png') }}" alt="" style="width:100%" class="maxH225"></a>
                @endif

            </div>
            <p class="txtCenter txtB tam14">{{$aux->name}}</p>
        </div>

        @endforeach

    </div>
</main>