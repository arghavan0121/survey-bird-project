@extends('layouts.front')
@section('title', $survey->title)
@section('content')
<section class="survey">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="welcome"  x-data="{url : '{{ $survey->redirect_url }}', backgroundColor: '{{ $survey->background_color }}'}" x-init="document.body.style.backgroundColor = backgroundColor; setTimeout(() => { if (!! url) window.location.href = url }, 3000)">
                    <h1 class="text-primary text-center">{{ $survey->goodbye_text ?? __('با تشکر از شما برای انجام نظرسنجی!') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
