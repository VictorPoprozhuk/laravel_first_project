@extends('layouts.main')
@section('content')
    <div>
        <span scope="row">{{$post->id}}</span>
        <span>{{$post->title}}</span>
        <span>{{$post->content}}</span>
        <a class="btn btn-primary" href="{{route('post.edit', $post->id)}}">Edit post</a>
        <div><a href="{{route('post.index')}}">Back</a></div>
    </div>
@endsection
