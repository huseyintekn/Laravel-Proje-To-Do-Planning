@extends('environment.skeleton_auth')
@section('title', trans('auth/password_email.heading_title'))
@section('content')
<div class="container vh-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-12">
			<div class="card">
				<div class="card-header p-3 fs-4">@lang('auth/password_email.heading_title')</div>
				<div class="card-body p-4">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
						{{ session('status') }}
                    </div>
                    @endif
					<form method="POST" action="{{ route('password.email') }}" id="form-password_email">
						@csrf
						<div class="form-floating">
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="input-email" name="email" value="{{ old('email') }}" placeholder="@lang('auth/password_email.input_email')" autocomplete="email" autofocus required />
							<label for="input-email">@lang('auth/password_email.input_email')</label>
						</div>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</form>
				</div>
				<div class="card-footer p-3">
					<button type="submit" form="form-password_email" class="btn btn-primary">@lang('auth/password_email.button_send')</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection