@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($category->name)
            <h1>{{ $category->name }}</h1>
        @endif
        <p>
            {{ $category->description }}
        </p>

        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('admin.posts.show', ['post' => $post]) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{ $posts->links() }}
    </div>
@endsection
