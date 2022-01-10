@extends('layouts.company')

@section('content')
<div class="content-header">
	<div class="container">

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title float-right">{{ __('حساب کاربری') }}</h3>
					</div>
					<form method="POST" action="{{ route('company.account.update',$user) }}">
						{{csrf_field()}}
						@method('PUT')
						<div class="card-body">
							<div class="form-group row">
								<label for="name" class="col-sm-3 text-sm-right col-form-label">
									{{ __('نام') }}</label>
								<div class="col-sm-6">
									<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}">
									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-sm-3 text-sm-right col-form-label">{{ __('ایمیل') }}</label>
								<div class="col-sm-6">
									<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-3 text-sm-right col-form-label">{{ __('رمز عبور') }}</label>
								<div class="col-sm-6">
									<input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-info float-right">{{ __('ویرایش') }}</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
