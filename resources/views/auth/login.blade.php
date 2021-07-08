@extends('environment.skeleton_auth')
@section('title', trans('auth/login.heading_title'))
@section('content')
<div class="container vh-100">
	<div class="row h-100 justify-content-center align-items-center rounded">
		<div class="col-6">
			<div class="card">
				<div class="card-header p-3 fs-4">@lang('auth/login.heading_title')</div>
				<div class="card-body p-4">
					<form method="POST" action="{{ route('login') }}" id="form-login">
						@csrf
						<div class="form-floating mb-3">
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="input-email" name="email" value="{{ old('email') }}" placeholder="@lang('auth/login.input_email')" autocomplete="email" autofocus required />
							<label for="input-email">@lang('auth/login.input_email')</label>
						</div>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<div class="form-floating mb-3">
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="input-password" name="password" placeholder="@lang('auth/login.input_password')" autocomplete="current-password" required>
							<label for="input-password">@lang('auth/login.input_password')</label>
						</div>
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="input-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="input-remember">@lang('auth/login.input_remember')</label>
						</div>
					</form>
				</div>
				<div class="card-footer p-3">
					<button type="submit" form="form-login" class="btn btn-primary">@lang('auth/login.button_login')</button>
					@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">@lang('auth/login.button_forgot_password')</a>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
