@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Historial de productos</h4>
            <p class="card-category"> Información sobre productos</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Name user</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($history as $h)
                        <tr>
                            <td>{{$h->id}}</td>
                            <td>{{$h->product->name}}</td>
                            <td>{{$h->quantity}}</td>
                            <td>{{$h->user->name}}</td>
                            <td>{{$h->product->quantity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
