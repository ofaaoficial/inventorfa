@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Historial de {{$product->name}}</h4>
            <p class="card-category"> Información sobre productos</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>Quantity</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($product->histories as $h)
                        <tr>
                            <td>{{$h->quantity}}</td>
                            <td>{{$h->user->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
