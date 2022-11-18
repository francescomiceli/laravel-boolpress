@extends('layouts.dashboard');

@section('content')
    <a href="{{ route('admin.categories.create') }}">Create new category</a>
    @foreach ($categories as $category)
        <div>{{ $category->name }}</div>
        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    @endforeach
@endsection
