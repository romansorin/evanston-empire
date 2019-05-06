@extends('app.main')
@section('title', 'Apply')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/apply.css') }}">
@endsection
@section('content')
<div class="container">
	<div class="jumbotron hero">
		<div class="row">
			<div class="col-12 text-center">
			<h1 class="title weight-bold">Apply</h1>
			<h2 class="subtitle mx-auto">Get started in your journey with Evanston.</h2>
			</div>
		</div>
	</div>
	@if ($errors->any())
							@foreach ($errors as $error)
							<li>$error</li>
							@endforeach
						@endif
	<section class="main-content">
		<div class="row section-content">
			<div class="col-6">
				<div class="card form-card">
					<div class="card-body">
						<form method="POST" action="/contact">
							@csrf
							<div class="form-group">
								<label class="weight-semibold" for="name">Name</label>
								<input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" value="{{ old('name') }}">
							</div>
							<div class="form-group">
								<label class="weight-semibold" for="email">Email Address</label>
								<input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<label class="weight-semibold" for="message">Message</label>
								<textarea class="form-control" name="message" id="message" rows="6">{{ old('message') }}</textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send E-mail --></button>
						</form>
						<hr>
						<div class="row">
							<h5 class="card-title">Contact Information</h5>
						</div>
						<div class="row">
							<p class="card-text">Place sdsdasdasdsa</p>
						</div>
						<div class="row">
							<p class="card-text">Place sdsdasdasdsa</p>
						</div>							
						<div class="row">
							<p class="card-text">Place sdsdasdasdsa</p>
						</div>
					</div>
				</div>			
			</div>
			<div class="col-6">
				<h1>How can we help</h1>
				<h2>dasdasdasdsa</h2>
				<div class="row">
					<h4>sadsadsad</h4>
					<p>sadasdsads</p>
				</div>
				<div class="row">
						<h4>sadsadsad</h4>
						<p>sadasdsads</p>
					</div>
					<div class="row">
							<h4>sadsadsad</h4>
							<p>sadasdsads</p>
						</div>
			</div>
		</div>
		</section>
	</div>
	@endsection