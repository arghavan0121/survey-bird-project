@extends('layouts.admin', ['title' => 'Users'])

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row text-center">
                <div class="col-12">
                    <div class="card card-outline card-success mt-3">
                        <div class="card-header text-right">
                            <h3 class="card-title">{{ __('کاربران') }}</h3>
                        </div>
                        <div class="card-body p-0">
                            @include('admin.shared.empty', ['lists' => $users])

                            @if(!$users->isEmpty())
                            <table class="table table-hover-table-responsive">
                                <thead>
                                    <tr>
                                        <th width="25%">{{ __('نام') }}</th>
                                        <th width="25%">{{ __('ایمیل') }}</th>
                                        <th width="25%">{{ __('تاریخ عضویت') }}</th>
                                        <th width="25%">{{ __('تاریخ ویرایش') }}</th>
                                        <th width="25%">{{ __('ویرایش') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDate() }}</td>
                                        <td>{{ Hekmatinasser\Verta\Verta::instance($user->updated_at)->formatDate() }}</td>
                                        <td><a class="fas fa-edit" href="{{ route('admin.users.edit', $user) }}"></a></td>
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
