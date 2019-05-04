@extends('app.main')
@section('title', 'What We Do')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="jumbotron hero pl-0">
		<div class="row">
			<div class="col-6">
				<h1 class="title weight-bold">About Us</h1>
			</div>
			<div class="col-6">
				<h2>We are the Evanston Empire, the premier summer work opportunity for students in the Evanston area</h2>
				<p class="subtitle weight-">The Evanston Empire is committed to providing an exceptional work opportunity for students hungry to grow both personally and professionally. We aim to create future leaders by training, challenging, support, and mentoring students who are looking to distinguish themselves from their peer group.</p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid img-fluid-container pl-0 pr-0">
	<img src="https://images.pexels.com/photos/630839/pexels-photo-630839.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid" alt="">
</div>
<div class="container">
	<section class="main-content">
		<div class="row">
			<div class="col-6">
				<h1>Our Values</h1>
			</div>
			<div class="col-6">
				<div class="row">
					<div class="col-6">
						<h5>dsdsd</h5>
						<p>dasdasdsadasd</p>
					</div>
					<div class="col-6">
						<h5>dsdsd</h5>
						<p>dasdasdsadasd</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<h5>dsdsd</h5>
						<p>dasdasdsadasd</p>
					</div>
					<div class="col-6">
						<h5>dsdsd</h5>
						<p>dasdasdsadasd</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection