@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h2>actualizar</h2>
    <div class="form-group">
        <legend>Editar Foto</legend>
        @if (Auth::user()->imagen==null)
            <img class=" avatarNormal" src="{{ asset('images/default.png') }}" alt="logo">
        @else
            <img class=" avatarNormal" src="{{url('/miniatura/'.Auth::user()->image)}}" alt="logo">
        @endif
        <label for="titulo" class="col-lg-label">{{Auth::user()->name}}</label>
        
</div>
@endsection