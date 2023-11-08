@extends('layouts.main')

@section('container')

<article>
    
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    <h5>By : Luthfi Alfarisi <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

    {!! $post->body !!}

    <a href="/posts">back</a>
</article>    
@endsection