@extends('adminlte::page')

@section('title', 'Editar Integrante')

@section('content_header')
    <h1>Editar Integrante</h1>
    
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('quienes_somos.index') }}"> Volver</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocurrio un Error.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{route('integrantes.update',$integrantes) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" value="{{$integrantes->nombre}}" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo:</strong>
                <input type="text" name="cargo" class="form-control" value="{{$integrantes->cargo}}" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Leyenda:</strong>
                <input type="text" name="leyenda" class="form-control" value="{{$integrantes->leyenda}}" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="imagen" class="form-control" value="{{$integrantes->imagen}}" >
                <img src="/imagenes/{{ $integrantes->imagen }}" width="200px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
     
</form>
  </form>
@stop
