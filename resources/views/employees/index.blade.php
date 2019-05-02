@extends('app.auth')
@section('title', 'Employees')
@section('content')
<div class="content-wrapper">
	    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home">
                </i>
            </span>
            Employees
        </h3>
        <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="employees">Employees</li>
              </ol>
            </nav>
    </div>
<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                	<div class="row mb-3">
                    <h4 class="ml-4 card-title weight-semibold">
                        All Employees
                    </h4>
                    <div class="ml-auto mr-4 btn-group float-right">
                    	<a role="button" href="/dashboard/employees/create" class="btn btn-sm btn-primary">Add Employee</a>
                    </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        University
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($employees as $employee)
                                <tr>
                                    <td>
                                        {{ $employee->id }}
                                    </td>
                                    <td>
                                        {{ $employee->name }}
                                    </td>
                                    <td>
                                        {{ $employee->university }}
                                    </td>
                                    <td>
                                    @if (!empty($employee->city_name) && !empty($employee->state_name)) {{ $employee->city_name }}, {{ $employee->state_name }}@endif
                                    </td>
                                    <td>
                                
                                      <div class="btn-group">
                                          <a role="button" class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/dashboard/employees/{{ $employee->id }}/edit">Edit</a>
                                            <form method="POST" action="/dashboard/employees/{{ $employee->id }}">
                                                @csrf
                                                @method('DELETE')
                                            <a class="dropdown-item" onclick="event.preventDefault(); $(this).closest('form').submit();" href="/dashboard/employees/{{ $employee->id }}">Delete</a>
                                            </form>
                                          </div>
                                        </div>             
                                    	
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 float-right">
                   {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div></div>
@endsection