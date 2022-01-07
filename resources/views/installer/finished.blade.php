@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">{{ __('موفق') }}</div>

                <div class="card-body">
                    <p>{{ __('برنامه نصب شده است.') }}</p>

                    <p><a href="{{ route('login') }}">{{ __('ورود مدیر') }}</a></p>

                    <p><a href="/">{{ __('صفحه اصلی') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
