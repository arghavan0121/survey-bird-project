@extends('layouts.admin',['title' => 'Extensions'])

@section('content')
<div class="content-wrapper text-center">
    <section class="content-header">
        <div class="container-fluid">


            <div class="row mb-2">
                <div class="col-sm-12">
                    <a href="{{ route('admin.extensions.create') }}" class="btn btn-primary float-sm-left">{{ __('نصب برنامه') }}</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('برنامه های نصب شده') }}</h3>
                        </div>
                        <div class="card-body p-0">
                           @include('admin.shared.empty', ['lists' => $extensions])

                           @if(!$extensions->isEmpty())
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="15%">{{ __('نام') }}</th>
                                            <th width="15%">{{ __('کد') }}</th>
                                            <th width="45%">{{ __('توضیحات') }}</th>
                                            <th width="10%">{{ __('نسخه') }}</th>
                                            <th width="15%">{{ __('تاریخ نصب') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($extensions as $extension)

                                            <tr>
                                                <td><a href="/admin/extensions/{{ strtolower($extension->code) }}">{{ $extension->name }}</a></td>
                                                <td>{{ $extension->code }}</td>
                                                <td>{{ $extension->description }}</td>
                                                <td>{{ $extension->version }}</td>
                                                @php
                                                    $extension=$extension->created_at = new Verta($extension->created_at);
                                                @endphp
                                                <td>{{ $extension->format('Y/m/d')}}</td>
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
