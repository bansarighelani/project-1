<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="{{ url('/index') }}" class="nav-link link-dark px-2 active" aria-current="page">{{config('app.name', 'LSAPP')}}</a></li>
        <li class="nav-item"><a href="{{ url('/index') }}" class="nav-link link-dark px-2">Home</a></li>
        <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link link-dark px-2">About</a></li>
        <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link link-dark px-2">services</a></li>
        <li class="nav-item"><a href="{{ url('/posts') }}" class="nav-link link-dark px-2">Blog</a></li>
        {{-- <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li> --}}
      </ul>
      {{-- <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
      </ul> --}}
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/posts/create')}}">Create Post</a></li>
      </ul>
    </div>
  </nav>