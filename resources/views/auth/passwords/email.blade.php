@extends('layouts.app')

@section('body-class', 'hold-transition register-page')

@section('content')
<div class="register-box">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="register-logo">
        <a href="#">
            <img src="{{ asset('logos/main-logo.png') }}" class="img-fluid">
        </a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <h4 class="login-box-msg">{{ __('فراموشی رمز عبور') }}</h4>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('ارسال رمز عبور') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
