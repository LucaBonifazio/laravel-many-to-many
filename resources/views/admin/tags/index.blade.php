@extends('layouts.app')

@section('content')
    @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Tag ID: {{ session('success_delete')->id }} successfully deleted!
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->slug }}</td>
                    <td>{{ $tag->name ?? '' }}</td>
                    <td>
                        <a href="{{ route('admin.tags.show', ['tag' => $tag]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('admin.tags.edit', ['tag' => $tag]) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger btn_delete" data-id="{{ $tag->slug }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tags->links() }}

    @include('admin.partials.delete_confirmation', [
        'delete_name' => 'tag',
    ])
@endsection
