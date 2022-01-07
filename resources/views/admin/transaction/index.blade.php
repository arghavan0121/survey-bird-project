@extends('layouts.admin', ['title' => 'Payment Request'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('درخواست های پرداختی') }}</h3>
                        </div>
                        <div class="card-body" style="padding: 0px 0px;">
                            @include('admin.shared.empty', ['lists' => $transactions])

                            @if(!$transactions->isEmpty())
                            <table class="table table-hover-table-responsive">
                                <thead>
                                    <tr>
                                        <th width="15%">{{__('کاربر')}}</th>
                                        <th width="15%">{{ __('طرح')}}</th>
                                        <th width="15%">{{ __('میزان')}}</th>
                                        <th width="15%">{{__('یادداشت')}}</th>
                                        <th width="15%">{{__('وضعیت')}}</th>
                                        <th width="15%">{{__('تاریخ ایجاد')}}</th>
                                        <th width="10%">{{__('ویرایش') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->user->name }}</td>
                                            <td>{{ $transaction->plan->title }} </td>
                                            <td>{{ $transaction->amount }} </td>
                                            <td>{{ $transaction->note }} </td>
                                            <td>{{ $transaction->status }} </td>
                                            <td>{{ date('d M, Y', strtotime($transaction->created_at)) }}</td>
                                            <td><a href="{{ route('admin.transactions.edit', $transaction) }}">{{ __('ویرایش') }}</a></td>
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
