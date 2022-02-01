@extends('layouts.company')

@section('content')
<div class="content-header">
    <section class="pricing py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="mb-4">{{ __('طرح های قیمت گذاری') }}</h2>
            </div>
            <div class="row">
                @foreach ($plans as $plan)
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                @if($plan->interval == 'monthly')
                                    @php $interval = 'ماهانه' @endphp
                                @elseif($plan->interval == 'yearly')
                                    @php $interval = 'سالانه' @endphp
                                @endif
                                <h5 class="card-title text-muted text-uppercase text-center">{{ $plan->title }}</h5>
                                <h6 class="card-price text-center">{{ $plan->price }}<span class="period">/{{ $interval }}</span></h6>

                                <hr>

                                <ul class="fa-ul">
                                    @foreach (explode("\n", str_replace("\r", "", $plan->description)) as $feature)
                                        <li><span class="fa-li"><i class="fas fa-check"></i></span>{{ $feature }}</li>
                                    @endforeach
                                </ul>

                                @if ($subscription && $subscription->active() && $plan->id == $subscription->plan_id)
                                    <button class="btn btn-block btn-info text-uppercase" disabled>طرح جاری</button>
                                @else
                                    <form action="{{ route('company.payment.show') }}" method="GET">
                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                        <button class="btn btn-block btn-primary text-uppercase">{{ __('انتخاب طرح') }}</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
