@extends('adminlte::page')

@section('title', 'Crear Slice')

@section('content_header')
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Slice</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('quienes_somos.index') }}">Volver</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocurrio un Error<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{route('slice.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="imagen" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
     
</form>
@stop
