<!-- Button trigger modal -->
<a
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#LoginModal"
name="Login"
style="background-color: #fbd5c0; border:#fbd5c0; padding-right: 20px; color:black; font-size: 20px"
>
Login
</a>

<!-- Modal -->
<div class="modal fade"id="LoginModal"tabindex="-1"aria-labelledby="LoginModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">Login</h5>
                <button type="button"class="btn-close"data-bs-dismiss="modal"aria-label="Close"></button>
            </div>
            <!--ini body -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group row" style="padding-top: 10px; padding-bottom: 10px">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-7">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-7">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row" style="padding-top: 10px; padding-bottom: 10px">
                        <div class="col-md-5 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- ini footer -->
                <div class="modal-footer">
                    <div class="form-group row">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link " href="{{ route('password.request') }}" >
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button name="login" type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>