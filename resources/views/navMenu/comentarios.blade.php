@if(Auth::check())
<main class="grid gap10">
    <form action="{{url('/comment')}}" method="POST" class="panelMedianoN">
        {!! csrf_field() !!}

        <input type="hidden" name="producto_id" id="producto_id" value="{{$producto->id}}">
        <textarea name="body" id="body" rows="3" required style="resize: none; outline:none" class="w100"></textarea>
        <div class="txtRight marB10 mar5">
            <button type="submit" class=" fillBlue tam18 boxShadow padLR20 hvrBorde">Comentar</button>
        </div>
    </form>
    @endif

    @if(session('message'))
    <div class="bg-orange">
        <p class="txtW tam18 pad10">{{session('message')}}</p>
    </div>

    @endif

    <div class="grid gap10">
        @if(isset($producto->comments))
        @foreach($producto->comments as $comment)
        <div class="panelMediano boxShadow">
            <div class="bg-blue">
                @if( Auth::check() && (Auth::user()->profile_photo_path!=null))
                <div class="flex align-items-center">
                    <img class="avatarChico" src="/storage/{{Auth::user()->profile_photo_path}}"
                        alt="/storage/{{Auth::user()->profile_photo_path}}" />
                    <p class="txtW tam18 pad5 block">{{$comment->user->name.' '.$comment->user->surname}} <span
                            class="txtGray"><span class="tam12">{{$comment->created_at}}</span></p>
                </div>
                @else
                <div class="flex align-items-center">
                    <img class="avatarChico mar5" src="{{ asset('images\avatar.png') }}">
                    <p class="txtW tam18 pad5">{{$comment->user->name.' '.$comment->user->surname}} <span
                            class="txtGray"><span class="tam12">{{$comment->created_at}}</span></p>
                </div>
                @endif

            </div>

            <p class="pad10 txtCenter tam14">{{$comment->body}}</p>

            @if(Auth::check()&& (Auth::user()->id==$comment->user_id|| Auth::user()->id==$producto->user_id))
            <div class="pad5 txtRight">
                <a href="{{url('delete-comment/'.$comment->id)}}" class="fillRojo pad5 padLR10"
                    onclick="return confirm('¿Está seguro de eliminar este comentario?')">Eliminar</a>
            </div>
            @endif
        </div>

        @endforeach
        @endif
    </div>
</main>