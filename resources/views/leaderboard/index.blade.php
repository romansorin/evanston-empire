<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                	<div class="row mb-3">
                    <h4 class="ml-4 card-title weight-semibold">
                        Leaderboard
                    </h4>
                    <div class="ml-auto mr-4 btn-group float-right">
                    	<a role="button" href="/dashboard/leaderboard/create" class="btn btn-sm btn-primary">Add Cell</a>
                    </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Rank
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        CPO
                                    </th>
                                    <th>
                                        Avg. Order Size
                                    </th>
                                    <th>
                                        # of Sales
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($cells as $cell)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $cell->employee_name }}
                                    </td>
                                    <td>
                                        {{ $cell->cpo }}
                                    </td>
                                    <td>
                                    	{{ $cell->average_order_size }}
                                    </td>
                                    <td>
                                    	{{ $cell->number_of_sales }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                          <a role="button" class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                          </a>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/dashboard/leaderboard/{{ $cell->id }}/edit">Edit</a>
                                            <form id="delete-form" method="POST" action="/dashboard/leaderboard/{{ $cell->id }}">
                                                @csrf
                                                @method('DELETE')
                                            <a class="dropdown-item" onclick="event.preventDefault(); $(this).closest('form').submit();" href="/dashboard/leaderboard/{{ $cell->id }}">Delete</a>
                                            </form>
                                          </div>
                                        </div>                            
                                       {{-- ... to edit and delete --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 float-right">
                    {{ $cells->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>