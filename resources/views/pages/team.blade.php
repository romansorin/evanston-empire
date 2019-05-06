@extends('app.main')
@section('title', 'Meet The Team')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/team.css') }}">
@endsection
@section('content')
<<<<<<< HEAD:resources/views/team.blade.php
<div class="container">
    <section class="main-content">
        <div class="row section-heading">
            <div class="col-12 text-center">
                <blockquote class="blockquote">
                    <h2 class="mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </h2>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="main-content">
        <div class="row section-heading">
            <div class="col-12">
                <h3 class="title">
                    Heading Title
                </h3>
            </div>
        </div>
    </section>
    <section class="main-content">
        <div class="row">
        	<div class="container">
            <section class="center slider">
                <div>
                    <img src="http://placehold.it/350x300?text=1">      
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=2">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=3">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=4">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=5">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=6">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=7">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=8">
                </div>
                <div>
                    <img src="http://placehold.it/350x300?text=9">
                </div>
            </section>
            </div>
        </div>
    </section>
=======
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
>>>>>>> frontend:resources/views/pages/team.blade.php
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/slick.js') }}">
</script>
@endsection
