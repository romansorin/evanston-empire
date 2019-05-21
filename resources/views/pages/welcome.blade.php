@extends('app.main')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@php
$logo = asset('images/white-evanston-logo.png');
@endphp

@section('title', 'Home')
@section('content')
<div class="container">
    <div class="jumbotron hero pl-md-0">
        <div class="row">
            <div class="col-md-6 col-sm-10">
                <h1 class="title title--light weight-semibold">Your <span class="weight-bold">next job</span><br />is
                    here.</h1>
                <h2 class="subtitle subtitle--light">We are a team of passionate students with the goal of creating rich
                    and real opportunities.</h2>
                <button class="btn cta-btn-light weight-semibold">Get in touch</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <section class="main-content">
        <div class="row section-heading">
            <div class="col-12 text-center">
                <h3 class="title weight-semibold">Position Perks</h3>
                <div class="border-bottom-purple ml-auto mr-auto"></div>
            </div>
        </div>
        <div class="row section-content" id="explore-opportunities-card-wrapper">
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="card ml-xl-0 mr-xl-0 mx-auto">
                    <div class="card-img">
                        <img class="img-fluid"
                            src="https://images.pexels.com/photos/2097116/pexels-photo-2097116.jpeg?cs=srgb&dl=architectural-design-architecture-building-2097116.jpg&fm=jpg"
                            alt="filler image">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-info mx-auto">
                            <h5 class="card-title">Flexibility</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="card ml-xl-0 mr-xl-0 mx-auto">
                    <div class="card-img">
                        <img class="img-fluid"
                            src="https://images.pexels.com/photos/2097116/pexels-photo-2097116.jpeg?cs=srgb&dl=architectural-design-architecture-building-2097116.jpg&fm=jpg"
                            alt="filler image">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-info mx-auto">
                            <h5 class="card-title">Experience</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="card ml-xl-0 mr-xl-0 mx-auto">
                    <div class="card-img">
                        <img class="img-fluid"
                            src="https://images.pexels.com/photos/2097116/pexels-photo-2097116.jpeg?cs=srgb&dl=architectural-design-architecture-building-2097116.jpg&fm=jpg"
                            alt="filler image">
                    </div>
                    <div class="card-body container text-center">
                        <div class="card-info mx-auto">
                            <h5 class="card-title">Income</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="card ml-xl-0 mr-xl-0 mx-auto">
                    <div class="card-img">
                        <img class="img-fluid"
                            src="https://images.pexels.com/photos/2097116/pexels-photo-2097116.jpeg?cs=srgb&dl=architectural-design-architecture-building-2097116.jpg&fm=jpg"
                            alt="filler image">
                    </div>
                    <div class="card-body container text-center">
                        <div class="card-info mx-auto">
                            <h5 class="card-title">Championship Team</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
