@extends('layouts.front')
@section('title', $survey->title)
@section('content')
<section class="survey">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="welcome" x-data="{
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}'
                }" x-init="document.body.style.backgroundColor = backgroundColor;">
                    <h1 class="text-primary text-center">{{ $survey->welcome_message }}</h1>
                    <h5 class="text-center">{{ $survey->description ??  '' }}<h5>
                    <div class="col-md-12 text-center">
                        <a href="{{ route('front.survey.start', array_merge(['survey' => $survey->uuid], request()->all()))}}" class="btn btn-primary start" :style="`background-color : ${buttonColor}; color: ${buttonTextColor}`">{{ __('شروع کنید') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
