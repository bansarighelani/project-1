@php
use App\Http\Controllers\PostController;
@endphp
@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Create Post</h1>
    <form class="contact-form" action="{{ action('App\Http\Controllers\PostController@store')}}" method="POST">
        @csrf
           {{-- <div class="row"> --}}
                 <div class="mb-4 col-md-6">
                       <input type="text" name="title" class="form-control" placeholder="Enter post title" value="{{ old('title') }}">
                       @error('title')
                          <p class="mt-1 text-danger">{{$message}}</p>
                       @enderror
                 </div>
                 {{-- <div class="mb-4 col-md-6">
                       <input type="text" name="body" class="form-control" placeholder="Enter post description" value="{{ old('body') }}">
                       @error('body')
                          <p class="mt-1 text-danger">{{$message}}</p>
                       @enderror
                 </div> --}}
                 <div class="mb-4 col-md-6">
                       <textarea class="form-control ckeditor" name="body" rows="5" placeholder="Enter post description" value="{{ old('body') }}"></textarea>
                       @error('body')
                          <p class="mt-1 text-danger">{{$message}}</p>
                       @enderror
                 </div>
                 <div class="mb-4 col-md-12">
                       <button class="btn btn-primary" type="submit">Submit</button>
                 </div>
           {{-- </div> --}}
     </form>
@endsection

@section('script')
      <script type="text/javascript">
            $(document).ready(function () {
            $('.ckeditor').ckeditor();
            });
      </script>
@endsection