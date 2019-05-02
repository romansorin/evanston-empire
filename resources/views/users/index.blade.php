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
                <li class="breadcrumb-item weight-semibold">
                    <a href="/dashboard">
                        Dashboard
                    </a>
                </li>
                <li aria-current="users" class="breadcrumb-item active">
                    Users
                </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="ml-2 card-title weight-semibold">
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
                                    <th>
                                    </th>
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
                                   <td>
                                        <div class="btn-group">
                                          <a role="button" class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/dashboard/users/{{ $user->username }}/edit">Edit</a>
                                            <form method="POST" action="/dashboard/users/{{ $user->username }}">
                                                @csrf
                                                @method('DELETE')
                                            <a class="dropdown-item" onclick="event.preventDefault(); $(this).closest('form').submit();" href="/dashboard/users/{{ $user->id }}">Delete</a>
                                            </form>
                                          </div>
                                        </div>                            
                                       
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
<div class="mt-4 float-right">
    {{ $users->links() }}
</div>
@endsection
