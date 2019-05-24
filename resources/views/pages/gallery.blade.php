@extends('app.main')
@section('title', 'Gallery')
@section('content')
</div>
<div class="container">
    <div class="jumbotron hero">
        <div class="row">
            <div class="col">
                <h1 class="title weight-bold">Photo Gallery</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="slider" id="gallery-slider">
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="photo-container">
                <img class="img-fluid"
                    src="https://images.pexels.com/photos/2291075/pexels-photo-2291075.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
        </div>
        {{-- <div id="carousel" class="carousel slide gallery-slider" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($images as $image)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img src="{{ asset("storage/images/$image->file_name") }}" class="d-block img-fluid"
        alt="{{ $image->file_name }}">
    </div>
    @else
    <div class="carousel-item">
        <img src="{{ asset("storage/images/$image->file_name") }}" class="d-block img-fluid"
            alt="{{ $image->file_name }}">
    </div>
    @endif
    @endforeach
</div>
<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div> --}}
</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/slick.js') }}"></script>
@endsection
