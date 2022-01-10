@extends('layouts.company')

@section('content')
<div class="content-header text-center">
	<div class="container">

		<div class="row mb-2">
			<div class="col-sm-3"></div>
			<div class="col-sm-9 float-right">
				<a href="{{ route('company.surveys.templates.index') }}" class="btn btn-outline-secondary float-right mb-2">{{ __('قالب خود را انتخاب کنید') }}</a>
				<form action="{{ route('company.surveys.store') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-primary float-right mr-2">{{ __('ایجاد نظرسنجی خالی') }}</button>
				</form>
			</div>

		</div>
		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title m-0 float-right"><strong>{{ __('نظرسنجی های شما') }}</strong></h5>
					</div>
					<div class="card-body table-responsive p-0">
						@includeWhen($surveys->isEmpty(), 'company.shared.empty', [
        					'heading' => __('اولین نظرسنجی خود را ایجاد کنید '),
        					'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.',
						])

						@if(!$surveys->isEmpty())
							<table class="table table-hover">
								<thead>
									<tr>
										<th width="50%">{{ __('عنوان') }}</th>
										<th width="10%">{{ __('قابلیت دید') }}</th>
										<th width="10%">{{ __('سوالات') }}</th>
										<th width="10%">{{ __('پاسخ') }}</th>
										<th width="20%">{{ __('تاریخ ایجاد') }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach($surveys as $survey)
										<tr>
											<td><a href="{{ route('company.surveys.edit', $survey) }}">{{ $survey->title }}</a></td>
											<td><span class="badge @if($survey->visibility) bg-success @else bg-warning @endif">@if($survey->visibility) فعال @else غیرفعال @endif</span></td>
											<td>{{ $survey->questions_count }}</td>
											<td>{{ $survey->responses_count }}</td>
                                            @php
                                                $survey=$survey->created_at = new Verta($survey->created_at);
                                            @endphp
											<td>{{ $survey}}</td>
											<td>
                                            <form method="POST" action="{{ route('company.surveys.destroy',$survey) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">{{ __('حذف') }}</button>
                                            </form>
                                        </td>
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
</div>
@endsection
