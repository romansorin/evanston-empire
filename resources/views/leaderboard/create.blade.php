@extends('app.auth')
@section('title', 'Add a row')
@section('content')
<div class="content-wrapper">
              <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-table">
                </i>
            </span>
              Leaderboard
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Leaderboard</a></li>
                <li class="breadcrumb-item active" aria-current="create">Create</li>
              </ol>
            </nav>
          </div>
    <div class="row">
		<div class="col-12 auth grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title weight-bold">Create a new cell</h4>
                  <p class="card-description">
                    Create a new cell for employee sales statistics.
                  </p>
                  <form method="POST" action="/dashboard/leaderboard">
                  	@csrf
                    <div class="form-group">
                      <label for="employee_name">Employee Name</label>
                      <select class="form-control form-control-lg pl-3" style="appearance: none; -webkit-appearance: none; -moz-appearance: none;" name="employee_name" id="employee_name">
                      	@foreach($employees as $employee)
						              <option class="pl-3" value="{{ $employee->name }}">{{ $employee->name }}</option>
                      	@endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cpo">CPO</label>
                      <input type="text" class="form-control form-control-lg pl-3" name="cpo" id="cpo" placeholder="Cost Per Order" value="{{ old('cpo') }}">
                    </div>
                    <div class="form-group">
                      <label for="average_order_size">Average Order Size</label>
                      <input type="text" class="form-control form-control-lg pl-3" name="average_order_size" id="average_order_size" placeholder="Average Order Size" value="{{ old('average_order_size') }}">
                    </div>
                    <div class="form-group">
                      <label for="number_of_sales">Number of Sales</label>
                      <input type="text" class="form-control form-control-lg pl-3" name="number_of_sales" id="number_of_sales" placeholder="Number Of Sales" value="{{ old('number_of_sales') }}">
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Create</button>
                    </form>                    
                  </div>
                </div>
              </div>
            </div> 	
    </div>
@endsection