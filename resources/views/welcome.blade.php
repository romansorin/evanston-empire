@extends('layouts.app')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection
@section('title', 'Home')
@section('content')
<div class="container">
	<div class="jumbotron hero">
		<div class="row">
			<div class="col-6">
				<h1 class="title title--light weight-semibold">Your <span class="weight-bold">next job</span><br/>is here.</h1>
				<h2 class="subtitle subtitle--light">We are a team of passionate students with the goal of creating rich and real opportunities.</h2>
				<button class="btn btn-light weight-semibold">Get in touch</button>
			</div>
			<div class="col-6">
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<section class="main-content">
		<div class="row section-heading">
			<div class="col-12 text-center">
				<h3 class="title weight--semibold">Explore Our Opportunities</h3>
				<div class="border-bottom ml-auto mr-auto"></div>
			</div>
		</div>
		<div class="row section-content">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<a href="#" class="link-blue">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="main-content">
		<div class="row section-heading">
			<div class="col-12 text-center">
				<h3 class="title weight--semibold">What We Do</h3>
				<div class="border-bottom ml-auto mr-auto"></div>
			</div>
			<div class="col-12 text-center">
				<blockquote class="blockquote">
					<p class="blockquote-text"><i>Profit is the ignition system of your economic engine.</i></p>
				</blockquote>
			</div>
		</div>
		<div class="row section-content">
			<div class="col-6">
				<h3 class="title">Make your success as simple as you can clap</h3>
				<p class="subtitle">Writing extra info here to simulate these types of text blocks to illustrate the idea of more content to sell someone on a product. And more, for a fourth line</p>
				<a class="link">View more benefits</a>
			</div>
			<div class="col-6">
				</div>
		</div>
		<div class="row text-center">
			<div class="col-12">
				<button class="btn btn-primary">button</button>
			</div>
		</div>
	</section>
</div>
@endsection