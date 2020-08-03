@extends('layouts.layout')

@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Create a new post</h3>

        @include('posts.parts.form')

        <input type="submit" value="Create" class="btn btn-outline-success">
    </form>
@endsection
