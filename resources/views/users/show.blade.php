@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{$user->name}}</h1>
            <p class="lead">{{$user->email}}</p>
        </div>
    </div>
@endsection
