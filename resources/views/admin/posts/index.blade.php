@extends('layouts.dashboard');

@section('content')

<a href="{{ route('admin.posts.create') }}">New post</a>

@foreach ($posts as $post  )
<div>
    {{$post['title']}}
    <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Destroy">
    </form>
</div>
@endforeach
@endsection
