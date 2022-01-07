@if($lists->isEmpty())
<section class="content">
    <div class="empty-state-container">
        <img class="empty-state-img" src="{{ asset('backend/images/empty.svg') }}">
        <h3>{{ __('هیچ سابقه ای یافت نشد') }}</h3>
    </div>
</section>
@endif
