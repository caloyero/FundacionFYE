@extends('adminlte::page')

@section('title', 'Editar administrador')

@section('content_header')
    <h1>Editar administrador</h1>
    
@stop

@section('content')
<form action="{{route('usuarios.update',$usuario->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$usuario->name}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$usuario->email}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$usuario->password}}" >
    </div>
   
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
@stop
