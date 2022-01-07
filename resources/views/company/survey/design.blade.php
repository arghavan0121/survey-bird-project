@extends('layouts.company')

@section('content')
<div class="content-header text-right">
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-12">
				<h4 class="mb-3">{{ $survey->title }}</h4>
				<div class="card template">
					<div class="tab-nav">
						@include('company.survey.tab', ['activeTab' => 'design', 'survey' => $survey])
						<div class="tab-content mt-3" id="myTabContent">
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="card shadow-none">
									<form class="form-horizontal" method="POST" action="{{ route('company.surveys.design.update', $survey) }}">
										@csrf
										@method('PUT')
										<div class="card-body">
                                            <div class="form-group row">
												<label for="question_color" class="col-sm-3 text-sm-right col-form-label">{{ __('رنگ سوال') }}</label>
												<div class="col-sm-3">
                                                    <div class="input-group survey-colorpicker">
                                                        <input type="text" class="form-control input-lg" value="{{ $survey->question_color }}" name="question_color" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </span>
                                                    </div>
												</div>
											</div>
                                            <div class="form-group row">
												<label for="answer_color" class="col-sm-3 text-sm-right col-form-label">{{ __('رنگ جواب') }}</label>
												<div class="col-sm-3">
                                                    <div class="input-group survey-colorpicker">
                                                        <input type="text" class="form-control input-lg" value="{{ $survey->answer_color }}" name="answer_color" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </span>
                                                    </div>
												</div>
											</div>
                                            <div class="form-group row">
												<label for="button_color" class="col-sm-3 text-sm-right col-form-label">{{ __('رنگ دکمه') }}</label>
												<div class="col-sm-3">
                                                    <div class="input-group survey-colorpicker">
                                                        <input type="text" class="form-control input-lg" value="{{ $survey->button_color }}" name="button_color" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </span>
                                                    </div>
												</div>
											</div>
                                            <div class="form-group row">
												<label for="button_text_color" class="col-sm-3 text-sm-right col-form-label">{{ __('رنگ متن دکمه') }}</label>
												<div class="col-sm-3">
                                                    <div class="input-group survey-colorpicker">
                                                        <input type="text" class="form-control input-lg" value="{{ $survey->button_text_color }}" name="button_text_color" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </span>
                                                    </div>
												</div>
											</div>
                                            <div class="form-group row">
												<label for="background_color" class="col-sm-3 text-sm-right col-form-label">{{ __('رنگ پس زمینه') }}</label>
												<div class="col-sm-3">
                                                    <div class="input-group survey-colorpicker">
                                                        <input type="text" class="form-control input-lg" value="{{ $survey->background_color }}" name="background_color" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </span>
                                                    </div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 text-sm-right col-form-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-info">{{ __('ذخیره تغییرات') }}</button>
												</div>
											</div>
										</div>
									</form>
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
