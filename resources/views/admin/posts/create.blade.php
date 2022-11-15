@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf
        <label for=""></label>
        <input type="text">

    </form>
@endsection
