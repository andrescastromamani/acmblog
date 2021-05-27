@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Lista de Usuarios <a href="users/create" class="btn btn-success float-right">Agregar Usuarios</a></h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <a href="" class="btn btn-warning">Editar</a>
                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection