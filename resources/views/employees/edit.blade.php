@extends('app.auth')
@section('title', 'Edit employee')
@section('content')
<div class="content-wrapper">
              <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-worker">
                </i>
            </span>
              Employees
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard/employees">Employees</a></li>
                <li class="breadcrumb-item active" aria-current="edit">Edit</li>
              </ol>
            </nav>
          </div>
    <div class="row">
		<div class="col-12 auth grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title weight-bold">Edit Employee</h4>
                  <p class="card-description">
                    Edit an employee's details.
                  </p>
                  <form method="POST" action="/dashboard/employees/{{$employee->id}}">
                  	@csrf
                  	@method('PATCH')
                     <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}} form-control-lg pl-3" name="name" id="name" placeholder="Name" value="{{ $employee->name }}">
                      <small class="text-danger">{{ $errors->first('name') }}</small>           
                    </div>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}} form-control-lg pl-3" name="title" id="title" placeholder="Title" value="{{ $employee->title }}">
                      <small class="text-danger">{{ $errors->first('title') }}</small>           
                    </div>
                    <div class="form-group">
                      <label for="university">University</label>
                      <input type="text" class="form-control {{ $errors->has('university') ? 'is-invalid' : ''}} form-control-lg pl-3" name="university" id="university" placeholder="University" value="{{ $employee->university }}">
                      <small class="text-danger">{{ $errors->first('university') }}</small>
                    </div>
                    <div class="form-group">
                      <label for="city_name">City</label>
                      <input type="text" class="form-control {{ $errors->has('city_name') ? 'is-invalid' : ''}} form-control-lg pl-3" name="city_name" id="city_name" placeholder="City" value="{{ $employee->city_name }}">
                      <small class="text-danger">{{ $errors->first('city_name') }}</small>
                    </div>
                    <div class="form-group">
                      <label for="state_name">State</label>
                      <input type="text" class="form-control {{ $errors->has('state_name') ? 'is-invalid' : ''}} form-control-lg pl-3" name="state_name" id="state_name" placeholder="State" value="{{ $employee->state_name }}">
                      <small class="text-danger">{{ $errors->first('state_name') }}</small>
                    </div>          
                    <button type="submit" class="btn btn-gradient-success mr-2">Save changes</button>
                    </form>                    
                  </div>
                </div>
              </div>
            </div> 	
    </div>
@endsection