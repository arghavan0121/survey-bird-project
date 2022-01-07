@extends('layouts.admin', ['title' => 'Create Subscription'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('افزودن اشتراک') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.subscriptions.store') }}">
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="plan_id"
                                        class="col-sm-3 col-form-label text-sm-right"> {{__('طرح')}}</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="plan_id">
                                            <option selected disabled>{{ __('انتخاب طرح') }}</option>
                                            @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">
                                                {{ $plan->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('plan_id')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="plan_id"
                                        class="col-sm-3 col-form-label text-sm-right"> {{__('کاربر')}}</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="user_id">
                                            <option selected disabled>{{ __('انتخاب کاربر') }}</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label text-sm-right">{{ __('تاریخ شروع') }}</label>
                                    <div class="col-sm-4">
                                         <input type="date" class="form-control {{ $errors->has('starts_at') ? ' is-invalid' : '' }}" name="starts_at" value="{{ old('starts_at') }}">
                                         @if ($errors->has('starts_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('starts_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label text-sm-right">{{ __('تاریخ پایان') }}</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control {{ $errors->has('ends_at') ? ' is-invalid' : '' }}" name="ends_at"  value="{{ old('ends_at') }}">
                                        @if ($errors->has('ends_at'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('ends_at') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-right"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">{{ __('ارسال') }}</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
