@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
    <button type="button" class="btn btn-info"><a style="color:black;" href="{{route('usuarios.crear_admin')}}">Crear Usuario Administrador</a></button>

    <table class="table table-striped-columns" {{-- id="proveedores" border="solid 1px" style="background-color:black; color:white; border-radius:10px" --}}>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td> aqui va el rol </td>
            <td>
                {{--<button id="" class="btn btn-primary"><a style="color:white"  href=" {{route('proveedores.detalle',$p->id)}} ">Detalle</a></button>--}}
                <button class="btn btn-warning"><a style="color:white" href="{{route('usuarios.editar', $usuario->id)}}">Editar</a></button>
                <form class="elimanar" action="{{route('usuarios.destroy', $usuario)}}" method="POST">
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
