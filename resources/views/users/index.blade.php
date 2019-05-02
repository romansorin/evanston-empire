@extends('app.auth')
@section('title', 'Users')
@section('content')
<div class="content-wrapper">
	    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home">
                </i>
            </span>
            Users
        </h3>
        <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item weight-semibold"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="users">Users</li>
              </ol>
            </nav>
    </div>
<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                	
                    <h4 class="ml-4 card-title weight-semibold">
                        All Users
                    </h4>
                   
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
                                        Username
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    {{-- <th></th> dots to edit and delete --}}
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                    {{ $user->username }}
                                    </td>
                                    
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                	</td>
                                       {{-- ... to edit and delete --}}
                                    	
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 float-right">
                   {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection