@section('title', 'Editar cupón')
<x-app-layout>
    @if (Auth::user()->rol_id == 2)
    <main class="divCenterJA full">
        <form action="{{ route('productUpdate',['producto_id'=>$edit->id])}}" method="post"
            enctype="multipart/form-data" class="panelMediano borde boxShadow mar20 pad20">
            {!! csrf_field() !!}

            <h2 class="txtB tam36 txtCenter pad20">Editar Cupón</h2>
            <!--Tipo-->
            <input type="text" id="tipo" name="tipo" value="Cupon" style="display:none" />
            <!--Titutlo-->
            <div class="marTB10">
                <label class="txtB tam24" for="title">Título</label>
                <input type="text" class="frm100 typeLinea lineaO " id="title" name="title" value="{{$edit->title}}" />
                <ul>
                    @foreach ($errors->get('title') as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <!--Descripcion-->
            <div class="marTB10">
                <label class="txtB tam24" for="description">Descripción</label>
                <input type="text" class="frm100 typeLinea lineaO" id="description" name="description"
                    value="{{$edit->description}}" />
                @if ($errors->has('description'))
                <strong>
                    <p class="txtRojo tam14">Debe introducir al menos 5 caracteres</p>
                </strong>
                @endif
            </div>

            <!--Expiracion-->
            <div class="marTB10">
                <label class="txtB tam24" for="fechaini">Día de inicio:</label>
                <input type="date" class="frm100 typeLinea lineaO  marTB10" id="fechaini" name="fechaini"
                    value="{{$edit->fechaini}}" min="20-01-01" require>
                @if ($errors->has('fechaini'))
                <strong>
                    <p class="txtRojo tam14">Este campo no puede quedar vacío.</p>
                </strong>
                @endif
            </div>
            <!--Expiracion-->
            <div class="marTB10">
                <label class="txtB tam24" for="fechaexp">Día de expiración:</label>
                <input type="date" class="frm100 typeLinea lineaO  marTB10" id="fechaexp" name="fechaexp"
                    value="{{$edit->fechaexp}}" min="20-01-01" require>
                @if ($errors->has('fechaexp'))
                <strong>
                    <p class="txtRojo tam14">Este campo no puede quedar vacío.</p>
                </strong>
                @endif
            </div>

            <!--foto del producto-->
            <div class="marTB10 divCenter">
                <label class="txtB tam24 hvrBorde borde" for="image">Elegir imagen</label>
                <input type="file" class="frm100 typeLinea lineaO inputUploadImg" id="image" name="image"
                    value="{{$edit->image}}" />
                <div class="imgProd">
                    <img class="wFull maxH270" src="{{url('/miniatura/'.$edit->image)}}" />
                </div>
                <div id="preview"></div>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            <!--Boton-->
            <div class="contCenter marTB10">
                <button type="submit" class="typeRadio fillBlue tam24 boxShadow padLR50 hvrBorde">Subir archivo</button>
            </div>
        </form>
    </main>

    @else

    @endif
</x-app-layout>