
@section('title', 'Subir Producto')
<x-app-layout>
<style>
    .frmOpciones{
        position: relative;
        width: 600px;
        height: auto;
        display: flex;
        flex-wrap: wrap;
    }
    .panelOpciones{
        flex:40%;
        margin: 10px;
        background: #fff;
        border-radius: 10px;
        
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.3);
    }
    .panelOpciones h2{
        color:#18455B;
        text-align: center;
        margin:10px;
    }
</style>
    <main class="contMain">
        <div class="frmOpciones">
            <div class="panelOpciones">
                <a href="{{route('crearProducto') }}"><img src="{{ asset('iconos/productos.png') }}" style="width: 100%;"/></a>
                <h2>Productos</h2>
                
            </div>
            <div class="panelOpciones">
                <a href="{{route('crearServicio') }}"><img src="{{ asset('iconos/servicios.png') }}" style="width: 100%;"/></a>
                <h2>Servicios</h2>
            </div>
            <div class="panelOpciones">
                <a href="{{route('crearPromocion') }}"><img src="{{ asset('iconos/promo.png') }}" style="width: 100%;"/></a>
                <h2>Promociones</h2>
            </div>
            <div class="panelOpciones">
                <a href="{{route('crearCupon') }}"><img src="{{ asset('iconos/cupon.png') }}" style="width: 100%;"/></a>
                <h2>Cupones</h2>
            </div>
        </div>
    </main>

</x-app-layout>