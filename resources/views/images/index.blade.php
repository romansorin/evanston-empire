@extends('app.auth') 
@section('title', 'Images') 
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span> Images
        </h3>
        <a href="/dashboard/images/create" class="btn btn-gradient-primary ml-auto" role="button">Upload New</a>
    </div>
    <div class="row">
        @foreach ($images as $image)
        <div class="col-4 grid-margin">
            <div class="card">
            <img src="{{ asset("storage/images/$image->file_name") }}" class="img-thumbnail" alt="{{ $image->file_name }}">
                <div class="card-body p-none">
                    <h4 class="card-title">{{ $image->file_name }}</h4>
                    <p class="card-description">
                        {{ $image->image_description }}
                    </p>
                <form method="POST" action="/dashboard/images/{{ $image->file_name }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-icon-text">
                            Delete
                        <i class="mdi mdi-file-check btn-icon-append"></i>                          
                    </button>
                </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection