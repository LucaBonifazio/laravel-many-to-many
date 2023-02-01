@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('admin.posts.update', ['post' => $post]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('title') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('slug') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <input type="url" class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" value="{{ old('category_id', $post->category->name) }}">
            @error('category_id')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('category_id') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">URL Image</label>
            <input type="url" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image', $post->image) }}">
            @error('image')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('image') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

            <div class="mb-3">
            <label for="uploaded_img" class="form-label">Image</label>
            <input class="form-control @error('uploaded_img') is-invalid @enderror" type="file" id="uploaded_img" name="uploaded_img">
            <div class="invalid-feedback">
                @error('uploaded_img')
                    <ul>
                        @foreach ($errors->get('uploaded_img') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>

            <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content"  class="form-control @error('content') is-invalid @enderror" id="content"  cols="30">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('content') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <textarea name="excerpt"  class="form-control @error('excerpt') is-invalid @enderror" id="excerpt"  cols="30">{{ old('excerpt', $post->excerpt) }}</textarea>
            @error('excerpt')
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('excerpt') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
