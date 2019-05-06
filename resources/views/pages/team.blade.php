@extends('app.main') 
@section('title', 'Meet The Team') 
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/team.css') }}">
@endsection
 
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
			<div class="col-12 text-center">
				<blockquote class="blockquote ml-auto mr-auto">
					<p class="display-4 blockquote-text weight-light--italic">“We make it our mission to have an impact on the world.”</p>
				</blockquote>
			</div>
		</div>
	</section>
</div>
<div class="container-fluid">
	<section class="main-content">
		<div class="container">
			<div class="row section-heading pl-2" id="employees-heading">
				<h3 class="title weight-semibold">Our Employees</h3>
			</div>
		</div>
		<div class="row">
			<section class="center slider">
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo " src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
				<div>
					<img class="img-fluid employee-photo" src="https://images.pexels.com/photos/2222745/pexels-photo-2222745.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
				</div>
			</section>
		</div>
	</section>
</div>
@endsection
 
@section('scripts')
<script src="{{ asset('js/slick.js') }}"></script>
@endsection