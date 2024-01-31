@extends('adminlte::page')

@section('title', 'Testimonios')

@section('content_header')
    <h1>Testimonios</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('integrantes.crear')}}">Agregar Testimonios</a></button>

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Imagen</th>
            <th>Leyenda</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($integrantes as $integrante)
        <tr>
            <td>{{$integrante->nombre}}</td>
            <td>{{$integrante->cargo}}</td>
            <td>{{$integrante->leyenda}}</td>
            <td><img src="/imagenes/{{ $integrante->imagen }}" width="75px" alt="50px"></td>
            <td>
                <button class="btn btn-warning"><a style="color:white" href="{{route('integrantes.editar', $integrante)}}">Editar</a></button>
                <form class="elimanar" action="{{route('integrantes.destroy', $integrante)}}" method="POST">
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
