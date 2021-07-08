@extends('environment.skeleton_auth')
@section('title', trans('auth/password_reset.heading_title'))
@section('content')
<div class="container vh-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-12">
			<div class="card">
				<div class="card-header p-3 fs-4">@lang('auth/login.heading_title')</div>
				<div class="card-body p-4">
                    <form method="POST" action="{{ route('password.update') }}" id="form-password_reset">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
					</form>
				</div>
				<div class="card-footer p-3">
					<button type="submit" form="form-password_reset" class="btn btn-primary">@lang('auth/login.button_reset')</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection