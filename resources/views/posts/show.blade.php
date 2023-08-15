@extends('layouts.app')

@section('content') 
    <div class="mt-3">
        <a href="{{url('/posts')}}" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>
            {!!$post->body!!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-defualt">Edit</a>
        {{-- <a class="btn btn-danger" href="/lsapp/public/posts/{{$post->id}}" >Delete</a> --}}
        <form action="{{ action('App\Http\Controllers\PostController@destroy', ['post' => $post->id])}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
@endsection