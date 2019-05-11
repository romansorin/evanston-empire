@extends('app.auth')
@section('title', 'Login')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            {{--
                            <img src="../../images/logo.svg">
                                --}}
                        </div>
                        <h4 class="weight-bold">
                            Hello! Let's get started
                        </h4>
                        <h6 class="weight-light">
                            Sign in to continue.
                        </h6>
                        <form action="{{ route('login') }}" class="pt-3" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">
                                    Username
                                </label>
                                <input
                                    class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }} form-control-lg pl-2"
                                    id="username" name="username" placeholder="Username" type="text"
                                    value="{{ old('username') }}">
                                <small class="text-danger">
                                    {{ $errors->first('username') }}
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password
                                </label>
                                <input
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} form-control-lg pl-2"
                                    id="password" name="password" placeholder="Password" type="password">
                                <small class="text-danger">
                                    {{ $errors->first('password') }}
                                </small>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg weight-medium auth-form-btn"
                                    type="submit">
                                    SIGN IN
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4 weight-light">
                            Don't have an account?
                            <a class="text-primary" href="/register">
                                Sign up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection