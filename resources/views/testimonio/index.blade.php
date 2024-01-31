@extends('adminlte::page')

@section('title', 'Testimonio')

@section('content_header')
    <h1>Testimonio</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('testimonio.crear')}}">Agregar Testimonio</a></button>

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Leyenda</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($testimonios as $testimonio)
        <tr>
            <td>{{$testimonio->titulo}}</td>
            <td>{{$testimonio->leyenda}}</td>
            <td><img src="/imagenes/{{ $testimonio->imagen }}" width="75px" alt="50px"></td>
            <td>
                 <button class="btn btn-warning"><a style="color:white" href="{{route('testimonio.editar', $testimonio)}}">Editar</a></button>
                <form class="elimanar" action="{{route('testimonio.destroy', $testimonio)}}" method="POST">
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
