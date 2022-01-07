@if($subscription)
    <div class="row mb-2">
		<div class="col-sm-12 mb-2">
            <a href="{{ route('company.billing.plans') }}" class="btn btn-primary">{{ __('تغییر طرح اشتراک') }}</a>
		</div>
	</div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('طرح اشتراک فعلی') }}</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td width="25%" class="text-muted border-0">{{ __('طرح') }}</td>
                        <td width="75%" class="border-0">{{ $subscription->plan->title }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">{{ __('هزینه') }}</td>
                        <td>{{ $subscription->plan->price }} / {{ $subscription->plan->interval }}</td>
                    </tr>

                    @if ($subscription->payment_method)
                        <tr>
                            <td class="text-muted">{{ __('روش پرداخت') }}</td>
                            <td>{{ ucfirst($subscription->payment_method) }}</td>
                        </tr>
                    @endif

                    @if ($subscription->starts_at)
                        <tr>
                            <td class="text-muted">{{ __('شروع دوره فعلی') }}</td>
                            <td>{{ $subscription->starts_at }}</td>
                        </tr>
                    @endif

                    @if ($subscription->ends_at)
                        <tr>
                            <td class="text-muted">{{ __('پایان دوره فعلی') }}</td>
                            <td>{{ $subscription->ends_at }}</td>
                        </tr>
                    @endif

                    @if ($subscription->canceled_at)
                        <tr>
                            <td class="text-muted">{{ __('تاریخ لغو') }}</td>
                            <td>{{ $subscription->canceled_at }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endif
