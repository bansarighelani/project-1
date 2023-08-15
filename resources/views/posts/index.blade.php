@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="well mt-3">
                <h1><a href="posts/{{$post->id}}">{{$post->title}}</a></h1>
                <small>Written on:{{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No post found!</p>
    @endif
@endsection