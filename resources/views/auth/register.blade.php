@extends('layouts.app')

@section('body-class', 'hold-transition register-page')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="/"><b>Survey Bird</b></a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <h4 class="login-box-msg">Create Account</h4>
            <form method="POST" action="{{ route('register') }}">
				@csrf
                <div class="input-group mb-3">
                    <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    </div>
                </div>
            </form>
            <p class="mb-0 mt-3">
                <a href="{{ route('password.request') }}">I forgot my password</a>
            </p>
            <p class="mb-2 mt-2">
                <a href="{{ route('login') }}" class="text-center">Already have an account?</a>
            </p>
        </div>
    </div>
</div>
@endsection