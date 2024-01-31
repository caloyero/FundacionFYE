@extends('adminlte::page')

@section('title', 'Quienes Somos')

@section('content_header')
    <h1>Entrega de Ayudas</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('entrega_de_ayudas.crear')}}">Agregar Contenido</a></button>

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entrega_de_ayudas as $ayudas)
        <tr>
            <td><img src="/imagenes/{{ $ayudas->imagen }}" width="75px" alt="50px"></td>
            <td>
               <button class="btn btn-warning"><a style="color:white" href="{{route('entrega_de_ayudas.editar', $ayudas)}}">Editar</a></button>
                <form class="elimanar" action="{{route('entrega_de_ayudas.destroy', $ayudas)}}" method="POST">
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
