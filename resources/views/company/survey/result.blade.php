@extends('layouts.company')

@section('content')
<div class="content-header text-right">
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-12">
				<h4 class="mb-3">{{ $survey->title }}</h4>
				<div class="card template">
					<div class="tab-nav">
						@include('company.survey.tab', ['activeTab' => 'result', 'survey' => $survey])
						<div class="tab-content mt-2" id="myTabContent">
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="card shadow-none">
                                    <div class="card-body">
                                        @includeWhen(empty($results), 'company.shared.empty', [
                                            'heading' => __('هنوز پاسخی داده نشده است'),
                                            'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نا مفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.',
                                        ])

                                        @if(!empty($results))
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-info"><i class="far fa fa-users"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{ __('کل پاسخ دهندگان') }}</span>
                                                            <span class="info-box-number">{{ $attendees_count }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-success"><i class="far fa fa-list"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{ __('تکمیل نظرسنجی') }}</span>
                                                            <span class="info-box-number">{{ $total_completed }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-warning"><i class="far fa fa-percent"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{ __('نرخ تکمیل') }}</span>
                                                            <span class="info-box-number">{{ $completion_rate }}%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <a href="{{ route('company.surveys.export', $survey) }}" class="text-dark">
                                                        <div class="info-box">
                                                            <span class="info-box-icon bg-secondary"><i class="far fa fa-download"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text">{{ __('صدور') }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    @foreach($results as $result)

                                                        @if(in_array($result['type'], ['phone', 'email', 'short-text', 'long-text', 'date', 'number']))
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">{{ $result['text'] }}</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p><i>{{ $result['total_responses'] }} از {{ $attendees_count }}  نفر به این سوال پاسخ داده اند.</i></p>

                                                                    @foreach($result['responses'] as $response)
                                                                        <p>{{ $response }}</p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif

                                                        @if(in_array($result['type'], ['multiple-choices', 'dropdown', 'yes-no','slider']))
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">{{ $result['text'] }}</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-12">
                                                                            <p><i>{{ $result['total_responses'] }} از {{ $attendees_count }} نفر به این سوال پاسخ داده اند.</i></p>

                                                                            @foreach($result['responses_aggregate'] as $option => $response)
                                                                                <div class="progress mb-3 bar-align">
                                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ (count($response) / $result['total_responses']) * 100 }}%;">
                                                                                        <span class="progress-text"><strong>{{ $option }}</strong></span>
                                                                                    </div>
                                                                                    <span class="progress-response-counter">{{ count($response) }} {{ __('پاسخ') }}</span>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        @if(in_array($result['type'], ['rating']))
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">{{ $result['text'] }}</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p><i>{{ $result['total_responses'] }} از {{ $attendees_count }} نفر به این سوال پاسخ داده اند.</i></p>

                                                                    @foreach(collect($result['responses_aggregate'])->sortKeys() as $option => $response)
                                                                        <div class="progress vertical bar-2-align">
                                                                            <div class="progress-bar bg-info" role="progressbar" style="height: {{ (count($response) / $result['total_responses']) * 100 }}%;">
                                                                                <span class="progress-text-vertical"><strong>{{ $option }}</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
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
