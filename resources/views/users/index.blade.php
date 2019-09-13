@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary">
            @if(Auth()->user()->role == 'admin')
                <a href="{{route('register')}}">
                    <button class="btn btn-success float-right">Crear</button>
                </a>
            @endif
            <h4 class="card-title ">Tabla de usuarios</h4>
            <p class="card-category"> Información de los usuarios del sistema.</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Document</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->document}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection