@extends('layouts.dashboard');

@section('content')

<a href="{{ route('admin.posts.create') }}">New post</a>

@foreach ($posts as $post  )
{{$post['title']}}
@endforeach
@endsection
