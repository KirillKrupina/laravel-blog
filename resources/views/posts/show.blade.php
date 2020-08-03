@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2>{{$post->title}}</h2></div>
                <div class="card-body">
                    <div class="card-img card-img__max"
                         style="background-image: url({{ $post->img ?? asset('img/hd-background-new-york-nyc-buildings-skyscrapers-metropolis.jpg')}})"></div>
                    <div class="card-author">Author: {{$post->name}}</div>
                    <div class="card-date">Created at: {{$post->created_at->diffForHumans()}}</div>
                    <div class="card-btn">
                        <a href="{{route('post.index')}}" class="btn btn-outline-primary">Back to main</a>
                        <a href="{{route('post.edit', ['id'=>$post->post_id])}}"
                           class="btn btn-outline-success">Edit</a>
                        <a href="{{route('post.destroy', ['id'=>$post->post_id])}}"
                           class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
