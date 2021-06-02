@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Lista de Usuarios <a href="{{route('users.create')}}" class="btn btn-success float-right">Agregar Usuarios</a></h1>
        <h5>
            <div class="alert alert-primary">
                <p class="">Los resultados para tu busqueda {{$search}} son:</p>
            </div>
        </h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-mail</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <th scope="row">{{ $user->name }}</th>
                        <th scope="row">{{ $user->email }}</th>
                        <th class="mr-2">
                            <form action="{{route('users.destroy',$user)}}" method="post">
                                <a href="{{route('users.show',$user->id)}}" type="button" class="btn btn-secondary btn-sm">Ver</a>
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
