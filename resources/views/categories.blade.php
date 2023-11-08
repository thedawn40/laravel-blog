@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category</h1>

@foreach ($categories as $category)

<article>
    <a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</h2></a> 
</article>

@endforeach

@endsection