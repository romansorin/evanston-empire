@extends('app.auth')
@section('title', 'Settings')
@section('content')
<div class="content-wrapper">
              <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-account-settings">
                </i>
            </span>
              Settings
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="settings">Settings</li>
              </ol>
            </nav>
          </div>
    <div class="row">
		<div class="col-12 auth grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title weight-bold">Your Profile</h4>
                  <p class="card-description">
                    Manage your information and settings.
                  </p>
                  <form method="POST" action="/dashboard/settings">
                  	@method('PUT')
                  	@csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control form-control-lg pl-3" name="name" id="name" value="{{ auth()->user()->name }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control form-control-lg pl-3" name="username" id="username" value="{{ auth()->user()->username }}" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control form-control-lg pl-3" name="email" id="email" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
{{--                     <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control form-control-lg pl-3" name="password" id="password" placeholder="Password">
                    </div> --}}
                   {{--  <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control form-control-lg file-upload-info pl-3" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-sm btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> --}}
                    <div class="form-inline">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    </form>
                    <form action="/dashboard/settings" method="POST">
                    	@method('DELETE')
                    	@csrf
                    <button type="submit" class="btn btn-gradient-danger">Delete</button>
                  	</form>
                  </div>
                </div>
              </div>
            </div>
    	
    </div>
</div>
@endsection