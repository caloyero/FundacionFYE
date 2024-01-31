@extends('adminlte::page')

@section('title', 'Quienes Somos')

@section('content_header')
    <h1>Quienes Somos</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('quienes_somos.crear')}}">Agregar Integrantes</a></button>

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($qss as $qs)
        <tr>
            <td>{{$qs->nombre}}</td>
            <td>{{$qs->contenido}}</td>
            <td><img src="/imagenes/{{ $qs->imagen }}" width="75px" alt="50px"></td>
            <td>
                <button class="btn btn-warning"><a style="color:white" href="{{route('quienes_somos.editar', $qs)}}">Editar</a></button>
                <form class="elimanar" action="{{route('quienes_somos.destroy', $qs)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >Borrar</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
    </table>
@stop

@section('content')
    
@stop
