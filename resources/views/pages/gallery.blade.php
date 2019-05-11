@extends('app.main')
@section('title', 'Gallery')
@section('content')
</div>
<div class="container-fluid">
    <div class="row">
        <div id="carousel" class="carousel slide gallery-slider" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($images as $image)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img src="{{ asset("storage/images/$image->file_name") }}" class="d-block img-fluid" alt="{{ $image->file_name }}">
                </div>
                @else
                <div class="carousel-item">
                <img src="{{ asset("storage/images/$image->file_name") }}" class="d-block img-fluid" alt="{{ $image->file_name }}">
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
        </div>
    </div>
</div>
@endsection