@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    @lang('توسعه داده شده توسط تیم پرسمان © 2019 – 2022. تمامی حقوق محفوظ است.')
{{--© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')--}}
@endcomponent
@endslot
@endcomponent
