@extends('adminlte::page')

@section('title', 'Editar administrador')

@section('content_header')
    <h1>Evento</h1>
    
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Evento</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Volver</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{route('eventos.update',$evento) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                <input type="text" name="nombre" class="form-control" value="{{$evento->nombre}}" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contenido:</strong>
                <textarea class="form-control" style="height:150px" name="contenido" value="" >{{$evento->contenido}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="imagen" class="form-control" value="{{$evento->imagen}}" >
                <img src="/imagenes/{{ $evento->imagen }}" width="200px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
     
</form>
  </form>
@stop
