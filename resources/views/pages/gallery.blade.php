@extends('app.main')
@section('title', 'Gallery')
@section('content')
<div class="container">
    <div class="jumbotron hero pl-0 pr-0">
        <div class="col-12 text-center">
            <h1 class="title weight-semibold mx-auto">Photo Gallery</h1>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="slider" id="gallery-slider">
        @foreach($images as $image)
        <div class="photo-container">
            <img class="d-block gallery-photo" src="{{ asset("storage/images/$image->file_name") }}">
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/slick.js') }}"></script>
@endsection