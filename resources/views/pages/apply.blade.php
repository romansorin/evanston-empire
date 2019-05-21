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
</div>
<div class="container-fluid" id="apply-bg">
	<div class="container">
	<section class="main-content">
		<div class="row section-content">
			<div class="col-lg-6 col-12">
				<div class="card form-card mx-auto">
					<div class="card-body">
						<form class="form-default" method="POST" action="/contact">
							@csrf
							<div class="form-group">
								<label class="weight-semibold" for="name">Name</label>
								<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="name" aria-describedby="name"
								 placeholder="Name" value="{{ old('name') }}">
								<small class="text-danger">{{ $errors->first('name') }}</small>
							</div>
							<div class="form-group">
								<label class="weight-semibold" for="email">Email Address</label>
								<input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email" aria-describedby="email"
								 placeholder="Email" value="{{ old('email') }}">
								<small class="text-danger">{{ $errors->first('email') }}</small>
							</div>
							<div class="form-group">
								<label class="weight-semibold" for="user_message">Message</label>
								<textarea class="form-control {{ $errors->has('user_message') ? 'is-invalid' : ''}}" name="user_message" id="user_message"
								 rows="6" placeholder="Message">{{ old('user_message') }}</textarea>
								<small class="text-danger">{{ $errors->first('user_message') }}</small>
							</div>
							<button type="submit" class="btn btn-gradient-primary">Send E-mail <span class="oi oi-arrow-right" title="arrow right" aria-hidden="true" id="view-more-arrow"></span></button>
						</form>
						<hr>
						<div class="contact">
							<h5 class="contact-title weight-semibold">Contact Information</h5>
							<p class="contact-text"><span class="oi oi-location" title="location" aria-hidden="true"></span>909 Davis St., Evanston, IL 60201</p>
							<p class="contact-text"><span class="oi oi-phone" title="phone" aria-hidden="true"></span>+1 847 910 1699</p>
							<p class="contact-text"><span class="oi oi-envelope-closed" title="envelope closed" aria-hidden="true"></span>info@evanstonempire.com</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div id="info-wrapper" class="mx-auto">
				<h1 class="title weight-semibold">How Can We Help?</h1>
				<h2 class="subtitle">Please select a topic below related to your inquiry. If you don’t find what you need, fill out our contact form. Or, see our <a href="/faq">FAQ</a> for more.</h2>
			</div>
				<div id="topic-wrapper" class="mx-auto">
					<div class="topic">
						<a href="">
							<h2 class="title">Book a Demo</h2>
						</a>
						<p class="desc weight-light">Request a demo from one of our specialists.</p>
					</div>
					<div class="topic">
						<a href="">
							<h2 class="title">Book a Demo</h2>
						</a>
						<p class="desc weight-light">Request a demo from one of our specialists.</p>
					</div>
					<div class="topic">
						<a href="">
							<h2 class="title">Book a Demo</h2>
						</a>
						<p class="desc weight-light">Request a demo from one of our specialists.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div></div></div>
@endsection