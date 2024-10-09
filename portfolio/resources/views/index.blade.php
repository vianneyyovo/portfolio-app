@extends('layouts.app')

@section('content')
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}">Create New Blog</a>

    @foreach ($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->content }}</p>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="100">
            <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
