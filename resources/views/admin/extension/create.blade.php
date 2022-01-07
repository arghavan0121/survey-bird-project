@extends('layouts.admin', ['title' => 'Extensions'])

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('برنامه های افزودنی موجود') }}</h3>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="20%">{{ __('نام') }}</th>
                                    <th width="50%">{{ __('توضیحات') }}</th>
                                    <th width="15%">{{ __('نسخه') }}</th>
                                    <th width="15%">{{ __('دانلود') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($extensions as $extension)
                                    <tr>
                                        <td>{{ $extension['name'] }}</td>
                                        <td>{{ $extension['description'] }}</td>
                                        <td>{{ $extension['version'] }}</td>
                                        <td>
                                            <form action="{{ route('admin.extensions.download') }}" method="POST">
                                                @if($installedExtensions->contains('name', $extension['name']))
                                                    <button class="btn btn-info" disabled>Installed</button>
                                                @else
                                                    @csrf
                                                    <input type="hidden" name="extension_name" value="{{ $extension['name'] }}">
                                                    <button class="btn btn-info" name="download">دانلود</button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @include('admin.extension.license')
        </div>
    </section>
</div>
@endsection
