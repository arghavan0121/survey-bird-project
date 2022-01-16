@extends('layouts.admin', ['title' => 'Update Survey'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('ویرایش نظرسنجی') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.surveys.update',$survey) }}">
                            {{csrf_field()}}
                            @method('PUT')
                           <div class="card-body">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 col-form-label text-sm-left">{{ __('عنوان') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $survey->title) }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="goodbye_text" class="col-sm-3 col-form-label text-sm-left">{{ __('متن تشکر') }}</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control @error('goodbye_text') is-invalid @enderror" rows="3" name="goodbye_text">{{ old('goodbye_text', $survey->goodbye_text) }}</textarea>
                                        @error('goodbye_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="goodbye_text" class="col-sm-3 col-form-label text-sm-left">{{ __('متن خوش آمدگویی') }}</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control @error('welcome_message') is-invalid @enderror" rows="3" name="welcome_message">{{ old('welcome_message', $survey->welcome_message) }}</textarea>
                                        @error('welcome_message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="redirect_url" class="col-sm-3 col-form-label text-sm-left">{{ __('ایمیل') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('redirect_url') is-invalid @enderror" name="redirect_url" value="{{ old('redirect_url', $survey->redirect_url) }}">
                                        @error('redirect_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label text-sm-left">{{ __('رمز عبور') }}</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-left">{{ __('تغییر رمز عبور') }}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control @error('require_password') is-invalid @enderror" name="require_password">
                                            <option {{ old('require_password', $survey->require_password) == 1 ? 'selected' : '' }} value="1">{{ __('بله') }}</option>
                                            <option {{ old('require_password', $survey->require_password) == 0 ? 'selected' : '' }} value="0">{{ __('خیر') }}</option>
                                        </select>
                                        @error('require_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-left">{{ __('قابلیت دیده شدن') }}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control @error('visibility') is-invalid @enderror" name="visibility">
                                            <option {{ old('visibility', $survey->visibility) == 1 ? 'selected' : '' }} value="1">{{ __('فعال') }}</option>
                                            <option {{ old('visibility', $survey->visibility) == 0 ? 'selected' : '' }} value="0">{{ __('غیرفعال') }}</option>
                                        </select>
                                        @error('visibility')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="question_color" class="col-sm-3 col-form-label text-sm-left">{{ __('رنگ سوال') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('question_color') is-invalid @enderror" name="question_color" value="{{ old('question_color', $survey->question_color) }}">
                                        @error('question_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="answer_color" class="col-sm-3 col-form-label text-sm-left">{{ __('رنگ جواب') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('answer_color') is-invalid @enderror" name="answer_color" value="{{ old('answer_color', $survey->answer_color) }}">
                                        @error('answer_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="button_color" class="col-sm-3 col-form-label text-sm-left">{{ __('رنگ دکمه') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('button_color') is-invalid @enderror" name="button_color" value="{{ old('button_color', $survey->button_color) }}">
                                        @error('button_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="button_text_color" class="col-sm-3 col-form-label text-sm-left">{{ __('رنگ متن دکمه') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('button_text_color') is-invalid @enderror" name="button_text_color" value="{{ old('button_text_color', $survey->button_text_color) }}">
                                        @error('button_text_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="background_color" class="col-sm-3 col-form-label text-sm-left">{{ __('رنگ پس زمینه') }}</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('background_color') is-invalid @enderror" name="background_color" value="{{ old('background_color', $survey->background_color) }}">
                                        @error('background_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-left">{{ __('افزودن به عنوان الگو') }}</label>
                                    <div class="col-sm-6">
                                        <select class="form-control @error('is_template') is-invalid @enderror" name="is_template">
                                            <option {{ old('is_template', $survey->is_template) == 1 ? 'selected' : '' }} value="1">بله</option>
                                            <option {{ old('is_template', $survey->is_template) == 0 ? 'selected' : '' }} value="0">خیر</option>
                                        </select>
                                        @error('is_template')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label text-sm-left"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">{{ __('ارسال') }}</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <x-admin.delete :action="route('admin.surveys.destroy',$survey)" />
            </div>
        </div>
    </section>
</div>
@endsection
