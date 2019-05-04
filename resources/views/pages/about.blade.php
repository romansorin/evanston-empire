@extends('app.main') 
@section('title', 'What We Do') 
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endsection
 
@section('content')
<div class="container">
	<div class="jumbotron hero pl-sm-0">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="title weight-bold">About Us</h1>
			</div>
			<div class="col-lg-6">
				<h2>We are the Evanston Empire, the premier summer work opportunity for students in the Evanston area</h2>
				<p class="subtitle weight-light">The Evanston Empire is committed to providing an exceptional work opportunity for students hungry to grow both personally
					and professionally.</p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid img-fluid-container pl-0 pr-0">
	<img src="https://images.pexels.com/photos/630839/pexels-photo-630839.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
	 class="img-fluid" alt="">
</div>
<div class="container pl-sm-0 pr-sm-0 pl-4 pr-4">
	<section class="main-content">
		<div class="row">
			<div class="col-12">
				<p class="lead" id="about-extended">
					At Evanston Empire, we aim to create future leaders by training, challenging, support, and mentoring students who are looking
					to distinguish themselves from their peer group.<br><br>The position is a platform for young people to practice
					and develop skills that will transfer into any industry or career path. By working with our team, students will learn
					how to cultivate strong relationships, communicate powerfully and effectively, manage their schedule and priorities,
					and build successful habits that will serve as a solid foundation for their future.<br><br>Our team has experienced
					tremendous success since opening in 2018, rapidly becoming the top branch in all of Vector’s Central Region. We are
					excited to continue building our organization around positive, hardworking, students looking to deviate from the “normal
					college kid” job or internship. For more information about our team or to be considered for a position, apply ASAP!
				</p>
			</div>
		</div>
	</section>
</div>
@endsection