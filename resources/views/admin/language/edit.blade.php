@extends('layouts.admin', ['title' => 'Update Language'])

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('ویرایش زبان') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.language.update', $language) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label text-sm-right">{{ __('نام') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name', $language->name) }}">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label text-sm-right">{{ __('کد') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text"
                                        class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"
                                        name="code" value="{{ old('code', $language->code) }}">
                                        @if ($errors->has('code'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('code') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select"
                                    class="col-sm-3 col-form-label text-sm-right">{{ __('وضعیت') }}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}"name="status">
                                            <option {{ old('status', $language->status) == 1 ? 'selected' : '' }} value="1">
                                            {{ __('فعال') }}</option>
                                            <option {{ old('status', $language->status) == 0 ? 'selected' : '' }} value="0">
                                            {{ __('غیرفعال') }}</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-right"></label>
                                    <div class="col-sm-6">
                                        <button type="submit"
                                        class="btn btn-primary">{{ __('ارسال') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <x-admin.delete :action="route('admin.language.destroy',$language)" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
@endsection
