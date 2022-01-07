@extends('layouts.app')

@section('body-class', 'hold-transition register-page')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="/">
            <img src="{{ asset('logos/main-logo.png') }}" class="img-fluid">
        </a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <h4 class="login-box-msg">{{ __('ثبت نام در وب سایت ') }}</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="نام" name="name" value="{{ old('name') }}" required autofocus>
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
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password" required autocomplete="current-password">
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
                        <button type="submit" class="btn btn-primary btn-block">{{ __('ثبت نام') }}</button>
                    </div>
                </div>
            </form>
            <p class="mb-0 mt-3 text-right">
                <a href="{{ route('password.request') }}">{{ __('رمز عبور خود را فراموش کرده‌اید؟ ') }}</a>
            </p>
            <p class="mb-2 mt-2 text-right">
                <a href="{{ route('login') }}" class="text-center">{{ __('
عضو سایت هستید ، وارد شوید ') }}</a>
            </p>
        </div>
    </div>
</div>
@endsection
