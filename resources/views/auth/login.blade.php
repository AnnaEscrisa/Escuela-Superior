@extends('layout')

<link type="text/css" rel="stylesheet" href="/css/extra.css" />

@section('content')


<!--Header-->
@include('partials/_header')


<!--alerta -->
@include('partials/_error-alert')

<main class="section">
    <div class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('Login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email"  name="email"
                                        required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Contraseña" id="password" 
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="button btn btn-block">Entrar</button>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center links">
                                        No tienes cuenta?<a class="link-card" href="/Registro">Registrate</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection