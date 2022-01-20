@extends('layouts.admin', ['title' => 'Subscriptions'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-12">
                    <a href="{{ route('admin.subscriptions.create') }}" class="btn btn-primary float-sm-left">{{ __('افزودن اشتراک') }}</a>
                    <div class="dropdown show">
                        <a class="btn btn-custom dropdown-toggle float-sm-left" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('فیلتر') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url()->current().'?'.http_build_query(array_merge(request()->except('page'),['status' => 'active'])) }}">{{ __('فعال') }}</a>
                            <a class="dropdown-item" href="{{ url()->current().'?'.http_build_query(array_merge(request()->except('page'),['status' => 'ended'])) }}">{{ __('اتمام') }}</a>
                            <a class="dropdown-item" href="{{ url()->current().'?'.http_build_query(array_merge(request()->except('page'),['status' => 'canceled'])) }}">{{ __('غیرفعال') }}</a>
                        </div>
                    </div>
                    @if (app('request')->all())
                     <a href="{{ route('admin.subscriptions.index') }}" class="btn btn-primary">{{ __('بازنشانی') }}</a>
                     @endif
                </div>
            </div>
        </div>
    </section>
    <section class="content text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('اشتراک ها') }}</h3>
                        </div>
                        <div class="card-body" style="padding: 0px 0px;">
                            @include('admin.shared.empty', ['lists' => $subscriptions])

                            @if(!$subscriptions->isEmpty())
                            <table class="table table-hover-table-responsive">
                                <thead>
                                    <tr>
                                        <th width="15%">{{__('نام')}}</th>
                                        <th width="15%">{{ __('طرح')}}</th>
                                        <th width="15%">{{ __('زمان شروع')}}</th>
                                        <th width="15%">{{__('زمان پایان')}}</th>
                                        <th width="10%">{{__('ویرایش') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)

                                        <tr>
                                            <td>{{ $subscription->user->name }}</td>
                                            <td>{{ $subscription->plan->title }} </td>

                                            <td>{{ Hekmatinasser\Verta\Verta::instance($subscription->starts_at)->formatDate() }}</td>
                                            <td>{{ Hekmatinasser\Verta\Verta::instance($subscription->ends_at)->formatDate() }}</td>
                                            <td><a class="fas fa-edit" href="{{ route('admin.subscriptions.edit', $subscription) }}"></a></td>
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
