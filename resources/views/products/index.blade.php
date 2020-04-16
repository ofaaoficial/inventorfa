@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary">
            @if(Auth()->user()->role == 'admin')
                <a href="{{route('products.create')}}">
                    <button class="btn btn-success float-right">Crear</button>
                </a>
            @endif
            <h4 class="card-title ">Tabla de productos</h4>
            <p class="card-category"> Información sobre productos</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        @if(Auth()->user()->role == 'admin')
                            <th>Options</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->type}}</td>
                            <td>{{$product->name}}</td>
                            <td>
                                <button class="btn btn-danger btn-small mr-2"
                                        @click.prevent="deductProduct({{$product->id}})">-
                                </button>

                                <span>{{$product->quantity}}</span>

                                @if(Auth()->user()->role == 'admin')
                                    <button class="btn btn-success btn-small ml-2"
                                            @click.prevent="addProduct({{$product->id}})">+
                                    </button>
                                @endif
                            </td>
                            <td>{{$product->description}}</td>
                            @if(Auth()->user()->role == 'admin')
                                <td>
                                    <a href="{{route('products.edit', $product->id)}}">
                                        <button class="btn btn-small btn-outline-success">Editar</button>
                                    </a>
                                    <a href="{{route('history.show', $product->id)}}">
                                        <button class="btn btn-small btn-outline-primary">Historial</button>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
