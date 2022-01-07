@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">{{ __('خوش آمدید') }}</div>

                <div class="card-body">
                    <p>{{ __('به مراحل نصب خوش آمدید. قبل از شروع، به اطلاعاتی در مورد پایگاه داده نیاز داریم. قبل از ادامه باید موارد زیر را بدانید.') }}</p>

                    <ul>
                        <li>{{ __('نام پایگاه داده') }}</li>
                        <li>{{ __('نام کاربری پایگاه داده') }}</li>
                        <li>{{ __('رمز عبور پایگاه داده') }}</li>
                        <li>{{ __('هاست پایگاه داده') }}</li>
                    </ul>

                </div>

                <div class="card-footer text-muted">
                    <a href="{{ route('install.permissions') }}" class="btn btn-primary float-right">{{ __('بیا بریم') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
