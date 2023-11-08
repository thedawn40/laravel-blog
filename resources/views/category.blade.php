@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)

<article>
    <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a> 
    <h5>{{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p> 
</article>

@endforeach

@endsection