@extends('layouts.admin', ['title' => 'Languages'])

@section('content')
<div class="content-wrapper text-center">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('admin.language.create') }}"
                    class="btn btn-primary float-sm-right">{{ __('افزودن زبان') }}</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('زبان') }}</h3>
                        </div>
                        <div class="card-body p-0">
                            @include('admin.shared.empty', ['lists' => $languages])

                            @if(!$languages->isEmpty())
                                <table class="table table-hover-table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="40%">{{ __('نام') }}</th>
                                            <th width="20%">{{ __('کد') }}</th>
                                            <th width="20%">{{ __('وضعیت') }}</th>
                                            <th width="20%">{{ __('ویرایش') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($languages as $key => $language)
                                            <tr>
                                                <td>{{ $language->name }}</td>
                                                <td>{{ $language->code }}</td>
                                                <td>{{ ($language->status == 1) ? 'Enabled':'Disabled' }}</td>
                                                <td><a class="fas fa-edit" href="{{ route('admin.language.edit', $language) }}"></a></td>
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
        {{ $languages->links() }}
    </section>
</div>
@endsection
