@extends('app.main')
@section('title', 'Apply')
@section('content')
<div class="container">
	<div class="jumbotron">
		<div class="row text-center">
			<div class="col-12">
			<h1>Apply</h1>
			<h2>Get started in your journey with Evanston.</h2>
		</div>
		</div>
	</div>
	<section class="main-content">
		<div class="row section-content">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email Address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Message</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send E-mail</button>
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
			<div class="col-6">dsadas</div>
		</section>
	</div>
	@endsection