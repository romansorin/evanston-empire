@extends('app.auth')
@section('title', 'Register')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                {{-- <img src="../../images/logo.svg"> --}}
              </div>
              <h4 class="weight-bold">New here?</h4>
              <h6 class="weight-light">Signing up is easy. It only takes a few steps.</h6>
              <form class="pt-3" method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Full Name</label>
                    <input type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} form-control-lg pl-2" name="name" id="name" placeholder="Name">
                    <small class="text-danger">{{ $errors->first('name') }}</small>           
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" value="{{ old('username') }}" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }} form-control-lg pl-2" name="username" id="username" placeholder="Username">
                    <small class="text-danger">{{ $errors->first('username') }}</small>           
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} form-control-lg pl-2" name="email" id="email" placeholder="Email">
                    <small class="text-danger">{{ $errors->first('email') }}</small>           
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Password</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} form-control-lg pl-2" name="password" id="password" placeholder="Password">
                    <small class="text-danger">{{ $errors->first('password') }}</small>           
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 weight-light">
                  Already have an account? <a href="/login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
   
  </div>
@endsection
