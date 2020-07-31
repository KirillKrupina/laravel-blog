@extends('layouts.layout')

@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Create a new post</h3>
        <div class="from-group">
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="from-group">
            <textarea name="descr" rows="10" class="form-control" required></textarea>
        </div>
        <div class="from-group">
            <input type="file" name="img">
        </div>

        <input type="submit" value="Create" class="btn btn-outline-success">
    </form>
@endsection
