@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8"> 
        <h1 class="mb-3">{{  $post->title }}</h1>
        <p>By. <a href="{{url('/posts?author')}}={{$post->author->username}}"class="text-decoration-none">{{ $post->author->name }}</a> <a href="{{url('posts?category')}}={{ $post->author->slug }}" class="text-decoration-none"><a href="{{url('/categories')}}{{ $post->category->slug }}"class="text-decoration-none">{{  $post->category->name }} <a></p>
        @if ($post->image)
        <div style="max-height: 550px; overflow:hidden;">
        <img src="{{ asset('storage/' .$post->image) }}" alt="{{$post->category->name}}" class="img-fluid mt-3">
       
        </div>
        @else
        <img src="https://source.unsplash.com/random/1200x400?{{  
            $post->category->name }}" class="img-fluid mt-3">
        
        @endif
        
        <article class="my-3 fs-5">
        {!! $post->body !!}
        </article>
        <a href="{{url('/posts')}}" class="d-block mt-3">Back to post</a>

        </div>
    </div>
</div>





@endsection