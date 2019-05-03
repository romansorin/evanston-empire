@extends('app.auth')
@section('title', 'Images')
@section('content')
<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Images
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">

                  	@foreach ($images as $image)
            <div class="col-md-4 grid-margin">
            
              <div class="card">
                <div class="card-body">
                 <div class="card-title">{{ $image->file_name}}</div>
                  
                  
                  
                  		<img src="{{ asset("storage/images/$image->file_name") }}" class="img-fluid rounded" alt="image">
                  		
                  	
                
              
            </div>
          </div>
                  	 
          </div>
          @endforeach      
      </div>
  </div>

@endsection

{{-- 
<img src="{{ asset('storage/images/Test Image')}}" alt=""> --}}