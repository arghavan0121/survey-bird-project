@if($subscription && !$subscription->canceled() && !$subscription->isFree())
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('لغو طرح اشتراک') }}</h3>
        </div>
        <div class="card-body">
            <p>{{ __('می توانید در هر زمان اشتراک خود را لغو کنید. هنگامی که اشتراک شما لغو شد،
                شما این گزینه را خواهید داشت که اشتراک را تا پایان چرخه صورتحساب فعلی خود از سر بگیرید.') }}
            </p>

            <form action="{{ route('company.billing.cancel') }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">{{ __('لغو عضویت') }}</button>
            </form>
        </div>
    </div>
@endif
