@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('products.index')}}">
                                <button class="btn btn-danger btn-small float-right">Volver</button>
                            </a>
                            <h1>Crear producto</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route('products.store')}}" method="POST">
                                @include('products.form.form')
                                <div class="form-group">
                                    <button class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection