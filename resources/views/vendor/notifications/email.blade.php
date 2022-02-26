@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('سلام کاربر عزیز!')
@endif
@endif


{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ 'با کلیک روی دکمه ذیل، می توانید رمز عبور جدیدی تنظیم نمایید.' }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php

    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>




@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ 'بازنشانی رمز عبور' }}

@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($introLines as $line)
{{ 'این پیوند بازنشانی رمز عبور 60 دقیقه دیگر منقضی می شود.
اگر بازنشانی رمز عبور را درخواست نکردید، هیچ اقدام دیگری لازم نیست.' }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('با احترام'),<br>
{{ 'تیم پرسمان' }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "اگر با کلیک کردن روی دکمه \"بازنشانی رمز عبور\" مشکل دارید، لینک زیر را کپی کرده و ".
    'در مرورگر وب خود جای‌گذاری کنید:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
