@extends('app.auth')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home">
                </i>
            </span>
            Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li aria-current="page" class="breadcrumb-item active">
                    <span>
                    </span>
                    Overview
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle">
                    </i>
                </li>
            </ul>
        </nav>
    </div>
    @include('leaderboard.index')
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/dashboard/off-canvas.js') }}">
</script>
<script src="{{ asset('js/dashboard/misc.js') }}">
</script>
<script src="{{ asset('js/dashboard/dashboard.js') }}">
</script>
@endsection
