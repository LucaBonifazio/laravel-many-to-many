@extends('layouts.app')

@section('content')
    @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Post ID: {{ session('success_delete')->id }} successfully deleted!
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Categories</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->category)
                            <a href="{{ route('admin.categories.show', ['category' => $post->category])}}">
                                {{ $post->category->name }}
                            </a>
                        @endif
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('admin.tags.show', ['tag' => $tag])}}">
                                {{ $tag->name }}{{ $loop->last ? '' : ', '}}
                            </a>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger btn_delete" data-id="{{ $post->slug}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

    @include('admin.partials.delete_confirmation', [
        'delete_name' => 'post',
    ])
@endsection
