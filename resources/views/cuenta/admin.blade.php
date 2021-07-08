@extends('layouts.app')
@section('title', 'Administrador')
@section('content')
<div class="">
    <li class="txtRight ">
        <a href="{{ route('logout') }}" class="txtB tam18 marTB10 hvrUnderline" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar Sesion
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
    
    <div class="panel" style="overflow-x:auto;">
        <table class="">
            <h2 class="txtCenter">Muestra de categorias</h2>
            <thead class="">
                <tr class="txtCenter txtW bgB">
                    <td class="pad10">tecnologia</td>
                    <td class="pad10">autos</td>
                    <td class="pad10">hogarmuebles</td>
                    <td class="pad10">moda</td>
                    <td class="pad10">alimentos</td>
                    <td class="pad10">juguetes</td>
                    <td class="pad10">deportes</td>
                    <td class="pad10">salud</td>
                    <td class="pad10">electrodomesticos</td>    
                    <td class="pad10">abarrotes</td> 
                    <td class="pad10">industria</td> 
                    <td class="pad10">ferreterias</td>             
                </tr>
            </thead> 
            <tbody>
                @foreach ($categorias as $categoria) 
                    <tr class="txtCenter">
                        @if ($categoria->tecnologia!=="")
                        <td class="pad10">{{$categoria->tecnologia}}</td>
                        @endif
                        @if ($categoria->autos!=="")
                        <td class="pad10">{{$categoria->autos}}</td>
                        @endif
                     
                        <td class="pad10">{{$categoria->hogarmuebles}}</td>
                        <td class="pad10">{{$categoria->moda}}</td>
                        <td class="pad10">{{$categoria->alimentos}}</td>
                        <td class="pad10">{{$categoria->juguetes}}</td>
                        <td class="pad10">{{$categoria->deportes}}</td>
                        <td class="pad10">{{$categoria->salud}}</td>
                        <td class="pad10">{{$categoria->electrodomesticos}}</td>    
                        <td class="pad10">{{$categoria->abarrotes}}</td> 
                        <td class="pad10">{{$categoria->industria}}</td> 
                        <td class="pad10">{{$categoria->ferreterias}}</td>    
                    </tr>
                @endforeach
            </tbody>          
        </table>

        <h2></h2>
    </div>
</div>

@stop