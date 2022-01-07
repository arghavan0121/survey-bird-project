@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($permissions['errors'])
                <div class="alert alert-danger" role="alert">
                    {{ __('قبل از ادامه مشکلات زیر را برطرف کنید') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header bg-success">
                    <strong>{{ __('مجوزها') }}</strong>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        @foreach($permissions['permissions'] as $permission)
                            <tr>
                                <td>{{ $permission['folder'] }}</td>
                                <td>{{ $permission['permission'] }}</td>
                                <td>
                                    @if($permission['isSet'])
                                        <span class="badge badge-primary p-2">{{ __('تایید') }}</span>
                                    @else
                                        <span class="badge badge-danger p-2">{{ __('لغو') }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="card-footer text-muted">
                        <form action="{{ route('install.requirements') }}" method="GET">
                            <button type="submit" class="btn btn-primary float-right" @if($permissions['errors']) disabled="disabled" @endif >{{ __('ادامه دهید') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
