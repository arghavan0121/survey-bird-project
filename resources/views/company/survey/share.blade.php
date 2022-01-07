@extends('layouts.company')

@section('content')
<div class="content-header text-right">
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-12">
				<h4 class="mb-3">{{ $survey->title }}</h4>
				<div class="card template">
					<div class="tab-nav">
						@include('company.survey.tab', ['activeTab' => 'share', 'survey' => $survey])
						<div class="tab-content mt-3" id="myTabContent">
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="card shadow-none">
                                    <div class="card-body" x-data="{
                                            src : '{{ $survey->url() }}',
                                            embedUrl: '{{ $survey->embedUrl() }}',
                                            width: 640,
                                            height: 640}"
                                            >
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-sm-right col-form-label">{{ __('آدرس نظرسنجی') }}</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="background_color" id="survey-url" x-model="src" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text btn-clipboard" data-clipboard-target="#survey-url">{{ __('کپی') }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row" >
                                            <label class="col-sm-3 text-sm-right col-form-label">{{ __('کد نمایش') }}</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="background_color" id="embed-survey" x-bind:value="`<iframe src='${embedUrl}' width='${width}' height='${height}' frameborder='0' marginwidth='0' marginheight='0'>Loading</iframe>`" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text btn-clipboard" data-clipboard-target="#embed-survey">{{ __('کپی') }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row" >
                                            <label class="col-sm-3 text-sm-right col-form-label">{{ __('عرض') }}</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="background_color" x-model="width" />
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2" >
                                            <label class="col-sm-3 text-sm-right col-form-label">{{ __('طول') }}</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="background_color" x-model="height" />
                                            </div>
                                        </div>


                                        @if (settings()->get('sharethis_status'))
                                            <div class="form-group row mt-4">
                                                <label class="col-sm-3 text-sm-right col-form-label">{{ __('اشتراک گذاری') }}</label>
                                                <div class="col-sm-6">
                                                    <div class="sharethis-inline-share-buttons"></div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group row mt-4">
                                            <label class="col-sm-3 text-sm-right col-form-label"></label>
                                            <div class="col-sm-6">
                                                <a href="{{ $survey->url() }}" target="_blank" class="btn btn-primary">{{ __('پیش نمایش نظرسنجی') }}</a>
                                            </div>
                                        </div>
								    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
