@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        @if ($post->category)
            <h3>Category:
                <a href="{{ route('admin.categories.show', ['category' => $post->category])}}">
                {{ $post->category->name }}
                </a>
            </h3>
        @endif
        @if (isset($post->category->name))

        @endif
        @if ($post->tags->all())
        <div>
            <h2>Tags</h2>
            @foreach ($post->tags as $tag)
                <a href="{{ route('admin.tags.show', ['tag' => $tag])}}">
                    {{ $tag->name }}{{ $loop->last ? '' : ', '}}
                </a>
            @endforeach
        </div>
        @endif
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}">
        <p>{{ $post->content }}</p>
    </div>
@endsection
