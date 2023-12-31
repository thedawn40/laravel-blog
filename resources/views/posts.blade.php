@extends('layouts.main')

@section('container')
    
@foreach ($posts as $post)

<article class="mb-5 border-bottom pb-4">
    <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a> 
    <p>By : <a href="#">{{ $post->user->name }}</a> in <a href="#">{{ $post->user->name }}</a></p>
    <h5>{{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p> 

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a>
</article>

@endforeach

@endsection