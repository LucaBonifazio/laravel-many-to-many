@extends('layouts.app')

@section('content')
    @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Category ID: {{ session('success_delete')->id }} successfully deleted!
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
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->name ?? '' }}</td>
                    <td>
                        <a href="{{ route('admin.categories.show', ['category' => $category]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('admin.categories.edit', ['category' => $category]) }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger btn_delete" data-id="{{ $category->slug }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

    @include('admin.partials.delete_confirmation', [
        'delete_name' => 'category',
    ])
@endsection
