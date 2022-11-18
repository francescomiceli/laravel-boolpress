@extends('layouts.dashboard');

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Add new category">
        <input type="submit" value="Enter">
    </form>
@endsection
