@extends('layouts.auth')

@section('content')
    <div class="ax-signup__content">
        <h3>Signup</h3>
        <form class="ax-signup__form ax-form-wrapper" action="{{ route('register') }}"
              method="post">
            @csrf

            <div class="ax-form-field">
                <label>Full Name <span> *</span></label>
                <fieldset>
                    <input type="text" class="@error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required
                           autocomplete="name" autofocus placeholder="Full Name" />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </fieldset>
            </div>

            <div class="ax-form-field">
                <label>Email <span> *</span></label>
                <fieldset class="">
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           class=" @error('email') is-invalid @enderror"
                           required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </fieldset>
            </div>

            <div class="ax-form-field ax-half">
                <label>Password <span> *</span></label>
                <fieldset class="ax-has-icon ax-has-icon--right">
                    <input id="password" type="password" name="password"
                           class=" @error('password') is-invalid @enderror"
                           required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

{{--                    <a href="" class="ax-show-password"></a>--}}
                </fieldset>
            </div>

            <div class="ax-form-field ax-half">
                <label>Confirm Password <span> *</span></label>
                <fieldset>
                    <input id="password-confirm" type="password" class=""
                           name="password_confirmation" required
                           autocomplete="new-password" placeholder="Confirm Password">
                </fieldset>
            </div>
            <button type="submit" class="ax-btn ax-btn--red get-started">Get Started Now!</button>
        </form>
        <span class="ax-signup__signin"> Already a member? <a href="{{ route('login') }}">Sign In</a> </span>
    </div>
@endsection
