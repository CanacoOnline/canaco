<x-app-layout>
    <main class="contProductsMain gap10">
        <div class="leftPanel">
            <div>
                <h1 class="tam24">Promociones</h1><br>
            </div>
            <div class="orden">
                <h1>Especial</h1>
                <ul class="listaCate">
                    <li><a class="hvrUnderline" href="/promociones">Promociones</a></li>
                    <li><a class="hvrUnderline" href="/cupones">Cupones</a></li>
                </ul>
            </div>
            <div class="cate">
                <h1>Categorías</h1>
                <div class="categorias">
                    <ul class="listaCate">
                        <li><a class="hvrUnderline" href="#">Llanteras</a></li>
                        <li><a class="hvrUnderline" href="#">Pintura/Pisos</a></li>
                        <li><a class="hvrUnderline" href="#">Tortillerias</a></li>
                        <li><a class="hvrUnderline" href="#">Panaderias</a></li>
                        <li><a class="hvrUnderline" href="#">Pastelerias/Miscelaneas</a></li>
                        <li><a class="hvrUnderline" href="#">Mercados/Abarrotes</a></li>
                        <li><a class="hvrUnderline" href="#">Refaccionarias</a></li>
                        <li><a class="hvrUnderline" href="#">Ropa/Regalos</a></li>
                        <li><a class="hvrUnderline" href="#">Farmacias</a></li>
                        <li><a class="hvrUnderline" href="#">Ferreterias</a></li>
                        <li><a class="hvrUnderline" href="#">Tiendas Departamentales</a></li>
                        <li><a class="hvrUnderline" href="#">Dentistas/Salud</a></li>
                        <li><a class="hvrUnderline" href="#">Laboratorios</a></li>
                        <li><a class="hvrUnderline" href="#">Opticas</a></li>
                        <li><a class="hvrUnderline" href="#">Veterinarias</a></li>
                        <li><a class="hvrUnderline" href="#">Automotriz</a></li>
                        <li><a class="hvrUnderline" href="#">Gasolineras</a></li>
                        <li><a class="hvrUnderline" href="#">Transportes y Agencias Aduanales</a></li>
                        <li><a class="hvrUnderline" href="#">Agencias Seguridad</a></li>
                        <li><a class="hvrUnderline" href="#">Esteticas y Barberias</a></li>
                        <li><a class="hvrUnderline" href="#">Despachos/Consultoria</a></li>
                        <li><a class="hvrUnderline" href="#">Bancos</a></li>
                        <li><a class="hvrUnderline" href="#">Paqueteria</a></li>
                        <li><a class="hvrUnderline" href="#">Funerarias</a></li>
                        <li><a class="hvrUnderline" href="#">Gym's</a></li>
                        <li><a class="hvrUnderline" href="#">Educacion</a></li>
                        <li><a class="hvrUnderline" href="#">Hoteles</a></li>
                        <li><a class="hvrUnderline" href="#">Casinos/Recreacion</a></li>
                        <li><a class="hvrUnderline" href="#">Restaurantes</a></li>
                        <li><a class="hvrUnderline" href="#">Maquiladoras</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="flex wrap gap10 ">
            
            @foreach($promociones as $aux)
            @if($aux->tipo=="Promocion" && $aux->user->rol_id==2)
            <div class="bg-white rel panelPromo boxShadow">
                <!--  Imagen  -->
                @if(Storage::disk('images')->has($aux->image))
                <div class="contCenter frm100">
                    <a href="{{ route('detailProducto', ['producto_id' => $aux->id]) }}">
                        <img class="wFull imgAlign" src="{{url('/miniatura/'.$aux->image)}}" />
                    </a>
                </div>
                @endif
                <div class="bg-blue rel h30 frm100 contCenter wrap">
                    <!--    Info    -->
                    <h3 class="padL10 frm100">
                        <a class="txtW bold600 hvrUnderline"
                            href="{{route('getUserDetail', ['user_id' => $aux->user->id]) }}">{{$aux->user->name}}</a>
                    </h3>

                    @if (Auth::guest())
                    @else
                    <!--    Botones     -->
                    @if(Auth::check() && Auth::user()->id == $aux->user->id || Auth::user()->rol_id == 1)
                    <div class="mar10 txtRight frm100">
                        <a href="" class="pad5  typeRadio fillBlue hvrBorde">Editar</a>
                        <a href="{{ route('productoDelete', ['img_id' => $aux->id]) }}"
                            class="pad5  typeRadio fillRojo hvrBorde"
                            onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                    </div>
                    @endif
                    @endif
                </div>
            </div>

            @endif
            @endforeach
            <div class="dir">
                {{$promociones->links()}}
            </div>



        </div>
    </main>
</x-app-layout>