@extends('layouts.app')
@section('content')
    <div class="row w-100 min-vh-100">
        <div class="col-md-8">
            <img src="{{asset('imgs/ws-img.jpg')}}" class="img-fluid" style="object-fit: cover; height: 1000px;" alt="ws-img">
        </div>
        <div class="col-md-4 row align-items-center justify-content-center">
            <div class="panel">

                <form method="POST" action="{{ route('login') }}" class="form-login">
                    <div class="row align-items-center justify-content-center mb-3">
                        <img src="{{asset('imgs/logo ws.jpg')}}" alt="logo ws" class="form-login__logo">
                    </div>
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Document') }}</label>
                        <div class="col-md-12">
                            <input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus>

                            @error('document')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">
                                {{ __('Ingresar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
