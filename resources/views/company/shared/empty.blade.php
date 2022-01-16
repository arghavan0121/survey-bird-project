<div class="empty">
    <img src="{{ asset('company/img/empty.png') }}" class="img-fluid">
    <h3 class="mt-4">{{ $heading }}</h3>
    <p>{{ $description }}</p>

    @if(isset($button))
        <a href="{{ $button['route'] }}" class="btn btn-primary">{{ $button['text'] }}</a>
    @endif

    @yield('buttonCustom')
</div>
