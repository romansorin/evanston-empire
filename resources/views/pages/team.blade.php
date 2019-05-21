@extends('app.main')
@section('title', 'Meet The Team')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/team.css') }}">
@endsection
@php
$logo = asset('images/white-evanston-logo.png');
@endphp
@section('content')

<div class="container">
	<div class="jumbotron hero">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="title title--light weight-bold">Meet The Team</h1>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<section class="main-content">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<blockquote class="blockquote ml-auto mr-auto">
					<p class="display-4 blockquote-text weight-light--italic">“We make it our mission to have an impact
						on the world.”</p>
				</blockquote>
			</div>
		</div>
	</section>
</div>
<div class="container-fluid">
	<section class="main-content">
		<div class="container">
			<div class="row section-heading pl-4 pl-lg-2" id="employees-heading">
				<h3 class="title weight-semibold">Our Employees</h3>
			</div>
		</div>
		<div class="row">
			<section class="center slider">
				@php
				use App\Employee;
				use App\Image;
				$employees = Employee::limit(5)->get();
				$images = Image::all();
				@endphp
				@foreach ($employees as $employee)
				<div>
					<div class="photo-container">
						<img class="img-fluid employee-photo"
						src="{{ asset("storage/images/$employee->name") }}">
					</div>
					<div class="info-container text-center">
						<h5 class="weight-semibold">{{ $employee->name }}</h5>
					<p class="mb-1">{{ $employee->title }} - {{ $employee->university }}</p>
						<p class="weight-light">{{ $employee->city_name }}, {{ $employee->state_name }}</p>
					</div>
				</div>
				@endforeach
			</section>
		</div>
	</section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/slick.js') }}"></script>
@endsection