@extends('adminlte::page')

@section('title', 'Slices')

@section('content_header')
    <h1>Slices</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('slice.crear')}}">Agregar Slice</a></button>

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($slice as $s)
        <tr>
            <td><img src="/imagenes/{{ $s->imagen }}" width="75px" alt="50px"></td>
             <td>
                 <button class="btn btn-warning"><a style="color:white" href="{{route('slice.editar', $s)}}">Editar</a></button>
                <form class="elimanar" action="{{route('slice.destroy', $s)}}" method="POST">
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
