<!-- Button trigger modal -->
<a
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#RegisterModal"
name="Register"
style="background-color: #fbd5c0; border:#fbd5c0; padding-right: 20px; color:black; font-size: 20px"
>
Register
</a>

<!-- Modal -->
<div class="modal fade"id="RegisterModal"tabindex="-1"aria-labelledby="RegisterModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="RegisterModalLabel">Register</h5>
                <button name="register" type="button"class="btn-close"data-bs-dismiss="modal"aria-label="Close"></button>
            </div>
            <!--ini body -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-body">
                <div class="form-group row" style="padding-top: 10px ;padding-bottom: 10px">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-7">
                        <input id="Remail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="padding-top: 10px ;padding-bottom: 10px">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-7">
                        <input id="Rpassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                </div>

                <!-- ini footer -->
                <div class="modal-footer">
                    <div class="form-group">
                        <button id="Rregis" type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


