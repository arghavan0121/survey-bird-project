@extends('layouts.admin', ['title' => 'Update Plan'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('ویرایش طرح') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.plans.update',$plan) }}">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 col-form-label text-sm-right">{{ __('عنوان') }}</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $plan->title) }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="code" class="col-sm-3 col-form-label text-sm-right">{{ __('توضیحات') }}</label>
                                    <div class="col-sm-5">
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" name="description">{{ old('description', $plan->description) }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="code" class="col-sm-3 col-form-label text-sm-right">{{ __('کد') }}</label>
                                    <div class="col-sm-6">
                                        <input type="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code', $plan->code) }}">
                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-sm-3 col-form-label text-sm-right">{{ __('هزینه') }}</label>
                                    <div class="col-sm-6">
                                        <input type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $plan->price) }}">
                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="code" class="col-sm-3 col-form-label text-sm-right">{{ __('شناسه طرح') }}</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control @error('stripe_plan_id') is-invalid @enderror" name="stripe_plan_id" value="{{ old('stripe_plan_id',$plan->stripe_plan_id) }}">
                                        @error('stripe_plan_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="interval" class="col-sm-3 col-form-label text-sm-right">{{ __('نوع اشتراک') }}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control @error('interval') is-invalid @enderror" name="interval">
                                            <option {{ old('interval',$plan->interval) == 'monthly'? 'selected':'' }} value="monthly">{{ __('ماهانه') }}</option>
                                            <option {{ old('interval',$plan->interval) == 'yearly'? 'selected':'' }} value="yearly">{{ __('سالانه') }}</option>
                                        </select>
                                        @error('interval')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-sm-right">{{ __('تعداد نظرسنجی') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control @error('survey_count') is-invalid @enderror"
                                            name="survey_count" value="{{ old('survey_count', $options[0]->limit) }}" placeholder="Limit">
                                        @error('survey_count')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-sm-right">{{ __('تعداد سوالات در هر نظرسنجی') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control @error('question_count_per_survey') is-invalid @enderror"
                                            name="question_count_per_survey" value="{{ old('question_count_per_survey', $options[1]->limit) }}" placeholder="Limit">
                                        @error('question_count_per_survey')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 col-form-label text-sm-right">{{ __('تعداد پاسخ در هر نظرسنجی') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control @error('response_count_per_survey') is-invalid @enderror"
                                            name="response_count_per_survey" value="{{ old('response_count_per_survey', $options[2]->limit) }}" placeholder="Limit">
                                        @error('response_count_per_survey')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-right"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">{{ __('ویرایش') }}</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <x-admin.delete :action="route('admin.plans.destroy',$plan)" />
            </div>
        </div>
    </section>
</div>
@endsection
