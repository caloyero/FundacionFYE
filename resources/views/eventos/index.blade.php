@extends('adminlte::page')

@section('title', 'Eventos')

@section('content_header')
    <h1>Eventos</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('eventos.crear')}}">Crear Eventos</a></button>

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
        @foreach($eventos as $evento)
        <tr>
            <td>{{$evento->nombre}}</td>
            <td>{{$evento->contenido}}</td>
            <td><img src="/imagenes/{{ $evento->imagen }}" width="200px"></td>
            <td>
                <button class="btn btn-warning"><a style="color:white" href="{{route('eventos.editar', $evento)}}">Editar</a></button>
                <form class="elimanar" action="{{route('eventos.destroy', $evento)}}" method="POST">
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
