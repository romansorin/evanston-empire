@extends('app.auth') 
@section('title', 'Upload Image') 
@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Images
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Images</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upload</li>
      </ol>
    </nav>
  </div>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Upload Image</h4>
        <p class="card-description">
          Upload images to be displayed on the site.
        </p>
        <form method="POST" action="/dashboard/images" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>File</label>
            <div class="input-group col-xs-12">
              <input type="file" name="file" class="file-upload-default">
              <input type="text" class="form-control {{ $errors->has('file') ? 'is-invalid' : ''}} form-control-lg file-upload-info pl-3"
                disabled placeholder="Original File">
              <span class="input-group-append">
                    <button class="file-upload-browse btn btn-sm btn-gradient-primary" type="button">Upload</button>
                </span>
            </div>
            <small class="text-danger">{{ $errors->first('file') }}</small>
          </div>
          <div class="form-group">
            <label for="image_description">File Name</label>
            <input type="text" class="form-control {{ $errors->has('file_name') ? 'is-invalid' : ''}} form-control-lg pl-3" name="file_name"
              id="file_name" placeholder="Set file name" value="{{ old('file_name') }}">
            <small class="text-danger">{{ $errors->first('file_name') }}</small>
          </div>
          <div class="form-group">
            <label for="image_description">Image Description</label>
            <input type="text" class="form-control {{ $errors->has('image_description') ? 'is-invalid' : ''}} form-control-lg pl-3" name="image_description"
              id="image_description" placeholder="Description" value="{{ old('image_description') }}">
            <small class="text-danger">{{ $errors->first('image_description') }}</small>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection