@if($edit->tipo=='Producto')
    @include('edit.producto')

@elseif($edit->tipo=='Servicio')
    @include('edit.servicio')

@elseif($edit->tipo=='Promocion')
    @include('edit.promocion')

@elseif($edit->tipo=='Cupon')
    @include('edit.cupon')

@endif