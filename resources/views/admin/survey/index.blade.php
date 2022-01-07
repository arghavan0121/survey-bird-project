@extends('layouts.admin', ['title' => 'Surveys'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <form action="{{ route('company.surveys.store') }}" method="POST">
					    @csrf
					    <button type="submit" class="btn btn-primary float-right mr-2">{{ __('ایجاد نظرسنجی') }}</button>
				    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="content-header text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('نظرسنجی ها') }}</h3>
                        </div>
                        <div class="card-body p-0">
                            @include('admin.shared.empty', ['lists' => $surveys])

                            @if(!$surveys->isEmpty())
                                <table class="table table-hover-table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="15%">{{ __('نام کاربر') }}</th>
                                            <th width="30%">{{ __('عنوان') }}</th>
                                            <th width="10%">{{ __('دیده شدن') }}</th>
                                            <th width="10%">{{ __('پاسخ ها') }}</th>
                                            <th width="10%">{{ __('سوال ها') }}</th>
                                            <th width="15%">{{ __('تاریخ ایجاد') }}</th>
                                            <th width="15%">{{ __('ویرایش') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($surveys as $key => $survey)
                                            <tr>
                                                <td>{{ $survey->user->name }}</td>
                                                <td><a href="{{ route('front.survey.show', [$survey]) }}">{{ $survey->title }}</a></td>
                                                <td>{{ ($survey->visibility == 1) ? 'فعال' : 'غیرفعال' }}</td>
                                                <td>{{ $survey->responses_count }}</td>
                                                <td>{{ $survey->questions_count }}</td>
                                                <td>{{ date('d M, Y', strtotime($survey->created_at)) }}</td>
                                                <td><a class="fas fa-edit" href="{{ route('admin.surveys.edit', $survey) }}"></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
