@extends('environment.skeleton_auth')
@section('title', trans('auth/register.heading_title'))
@section('content')
<div class="container vh-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-12">
			<div class="card">
				<div class="card-header p-3 fs-4">@lang('auth/register.heading_title')</div>
				<div class="card-body p-4">
					<form method="POST" action="{{ route('register') }}" id="form-register">
						@csrf
						<div class="form-floating mb-3">
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="input-name" name="name" value="{{ old('name') }}" placeholder="@lang('auth/register.input_name')" autocomplete="name" autofocus required />
							<label for="input-name">@lang('auth/register.input_name')</label>
						</div>
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<div class="form-floating mb-3">
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="input-email" name="email" value="{{ old('email') }}" placeholder="@lang('auth/login.input_email')" autocomplete="email" autofocus required />
							<label for="input-email">@lang('auth/login.input_email')</label>
						</div>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<div class="row">
							<div class="col-md-6">
								<div class="form-floating">
									<input type="password" class="form-control @error('password') is-invalid @enderror" id="input-password" name="password" placeholder="@lang('auth/register.input_password')" autocomplete="current-password" required>
									<label for="input-password">@lang('auth/register.input_password')</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<input type="password" id="input-password-confirm" class="form-control" name="password_confirmation" placeholder="@lang('auth/register.input_password_confirm')" autocomplete="new-password" required />
									<label for="input-password-confirm">@lang('auth/register.input_password_confirm')</label>
								</div>
							</div>
						</div>
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</form>
				</div>
				<div class="card-footer p-3">
					<button type="submit" form="form-register" class="btn btn-primary">@lang('auth/register.button_register')</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection