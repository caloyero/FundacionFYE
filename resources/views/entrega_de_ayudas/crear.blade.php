@extends('adminlte::page')

@section('title', 'Quienes Somos')

@section('content_header')
    <h1>Entrega de Ayuda</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Testimonio</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('quienes_somos.index') }}">Volver</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocurio un Error<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{route('entrega_de_ayudas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="imagen" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
     
</form>
@stop
