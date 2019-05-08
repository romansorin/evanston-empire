@extends('app.main')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

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
                <h3 class="title weight-semibold">Explore Our Opportunities</h3>
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
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="weight-semibold">Go somewhere</a>
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
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="weight-semibold">Go somewhere</a>
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
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="weight-semibold">Go somewhere</a>
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
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="weight-semibold">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-content">
        <div class="row section-heading">
            <div class="col-12 text-center">
                <h3 class="title weight-semibold">What We Do</h3>
                <div class="border-bottom-purple ml-auto mr-auto"></div>
            </div>
        </div>
        <div class="row section-content">
            <div class="col-12 text-center">
                <blockquote class="blockquote ml-auto mr-auto">
                    <p class="blockquote-text weight-light--italic">Profit is the ignition system of your economic
                        engine.</p>
                </blockquote>
            </div>
            <div class="col-md-4 col-12" id="what-we-do-info">
                <h3 class="title">Make your success as simple as you can clap</h3>
                <p class="subtitle">Writing extra info here to simulate these types of text blocks to illustrate the
                    idea of more content to sell someone
                    on a product. And more, for a fourth line</p>
                <a href class="link weight-bold">View more benefits <span class="oi oi-arrow-right" title="arrow right"
                        aria-hidden="true" id="view-more-arrow"></span></a>
            </div>
            <div class="col-8">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <button class="btn cta-btn-primary">Learn more</button>
            </div>
        </div>
    </section>
</div>
@endsection
