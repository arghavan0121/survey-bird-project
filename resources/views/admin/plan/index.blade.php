@extends('layouts.admin', ['title' => 'Plans'])

@section('content')
<div class="content-wrapper text-center">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-12">
                    <a href="{{ route('admin.plans.create') }}" class="btn btn-primary float-sm-left">{{ __('افزودن طرح') }}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title table-responsive">{{ __('طرح ها') }}</h3>
                        </div>
                            @include('admin.shared.empty', ['lists' => $plans])

                            @if(!$plans->isEmpty())
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="25%">{{ __('عنوان') }}</th>
                                            <th width="25%">{{ __('کد') }}</th>
                                            <th width="25%">{{ __('هزینه') }}</th>
                                            <th width="25%">{{ __('نوع اشتراک') }}</th>
                                            <th width="25%">{{ __('ویرایش') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $key => $plan)
                                            <tr>
                                                <td>{{ $plan->title }}</td>
                                                <td>{{ $plan->code }}</td>
                                                <td>{{ $plan->price }}</td>

                                                @if($plan->interval == 'monthly')
                                                    @php $interval = 'ماهانه' @endphp
                                                @elseif($plan->interval == 'yearly')
                                                    @php $interval = 'سالانه' @endphp
                                                @endif

                                                <td>{{ $interval }}</td>
                                                 <td><a class="fas fa-edit" href="{{ route('admin.plans.edit', $plan) }}"></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
