@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('products.create')}}">
                                <button class="btn btn-success btn-small float-right">Crear</button>
                            </a>
                            <h1>Productos</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover ">
                                <thead>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Options</th>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->type}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>
                                            <button class="btn btn-danger btn-small ml-1">-</button>
                                            {{$product->quantity}}
                                            <button class="btn btn-success btn-small mr-1">+</button>

                                        </td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <a href="{{route('products.edit', $product->id)}}">
                                                <button class="btn btn-small btn-outline-success">Editar</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection