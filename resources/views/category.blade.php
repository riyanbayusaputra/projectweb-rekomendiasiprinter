
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
    <h2><a href="{{url('/posts/'.$post->slug )}}" class="text-decoration-none">{{  $post->title }}</a></h2>
    
    <p>By
        

    <p>{{ $post->excerpt }}</p>

    <a href="{{url('/posts/'. $post->slug )}}">Read more</a>

    </article>
    @endforeach

    
@endsection