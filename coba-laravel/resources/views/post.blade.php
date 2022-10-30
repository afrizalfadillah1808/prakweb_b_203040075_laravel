@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a href="/blog" class="d-block mt-5">Back to Post</a>

@endsection