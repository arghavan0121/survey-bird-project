@extends('layouts.company')

@section('content')
<div class="content-header">
	<div class="container">
		<div class="row mb-2">
			<div class="col-sm-3"></div>
			<div class="col-sm-9 float-right">
				<form action="{{ route('company.surveys.store') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-primary float-sm-right">{{ __('ایجاد نظرسنجی خالی') }}</button>
				</form>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title m-0 float-right"><strong>{{ __('گالری قالب ها') }}</strong></h5>
					</div>
					<div class="card-body table-responsive">
						@if(!$templates->isEmpty())
                            <div class="row survey-tab">
                                @foreach($templates as $template)
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-2 float-right"><strong>{{ $template->title }}</strong></h5>
                                                <p class="card-text text-center">{{ $template->welcome_message }}</p>
                                                <form action="{{ route('company.surveys.duplicate', $template) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info w-100">{{ __('از این قالب استفاده کنید') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
