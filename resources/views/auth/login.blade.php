@extends('layouts.auth')

@section('content')
    <div class="ax-signup__content">
        <h3>Login</h3>
        <form class="ax-signup__form ax-form-wrapper" action="{{ route('login') }}" method="post">
            @csrf

            <div class="ax-form-field">
                <label>Email <span> *</span></label>
                <fieldset>
                    <input id="email" type="email" name="email" placeholder="Email"
                           class="@error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
            </div>

            <div class="ax-form-field">
                <label>Password <span> *</span></label>
                <fieldset class="ax-has-icon ax-has-icon--right">
                    <input id="password" type="password" name="password" placeholder="Password"
                           class="@error('password') is-invalid @enderror"
                           required autocomplete="current-password">
{{--                    <a href="#" class="ax-show-password"></a>--}}
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </fieldset>
            </div>

{{--            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

            <button type="submit" class="ax-btn ax-btn--red get-started">Login</button>
        </form>

        @if (Route::has('password.request'))
            <span class="ax-signup__signin">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </span>
        @endif
        <span class="ax-signup__signin">
            Not a Member? <a href="{{ route('register') }}"> Sign Up Now!</a>
        </span>
    </div>
@endsection
