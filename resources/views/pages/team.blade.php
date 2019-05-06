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
		<div class="row section-heading">
			<div class="col-12 text-center">
				<blockquote class="blockquote">
					<h2 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h2>
				</blockquote>
			</div>
		</div>
	</section>
	<section class="main-content">
		<div class="row section-heading">
			<div class="col-12">
				<h3 class="title">Heading Title</h3>
			{{-- <img src="{{ asset("storage/images/$image->filename") }}" style="width: 200px; height: 200px" alt="">
			<a href="/dashboard/images/{{ $image->filename }}/edit">Edit</a> --}}
			</div>
		</div>
	</section>
</div>
@endsection