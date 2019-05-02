@extends('app.auth')
@section('title', 'Edit row')
@section('content')
<div class="content-wrapper">
              <div class="page-header">
            <h3 class="page-title">
              Users
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard/employees">Users</a></li>
                <li class="breadcrumb-item active" aria-current="edit">Edit</li>
              </ol>
            </nav>
          </div>
    <div class="row">
		<div class="col-12 auth grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title weight-bold">Edit User</h4>
                  <p class="card-description">
                    Edit a user's name, username, or email.
                  </p>
                  <form method="POST" action="/dashboard/users/{{$user->id}}">
                  	@csrf
                  	@method('PATCH')
                    <div class="form-group">
                    	<label for="name">Name</label>
                    	<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}} form-control-lg pl-3" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
                    	<small class="text-danger">{{ $errors->first('name') }}</small>           
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}} form-control-lg pl-3" name="username" id="username" placeholder="Username" value="{{ $user->username }}">
                      <small class="text-danger">{{ $errors->first('username') }}</small>           
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}} form-control-lg pl-3" name="email" id="email" placeholder="Email" value="{{ $user->email }}">
                      <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>                   
                    <button type="submit" class="btn btn-gradient-success mr-2">Save changes</button>
                    </form>                    
                  </div>
                </div>
              </div>
            </div> 	
    </div>
@endsection