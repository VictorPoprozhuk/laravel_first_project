@extends('layouts.main')
@section('content')

    <table class="table">
        <a class="btn btn-primary" href="{{route('post.create')}}">Add One Item</a>
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">img</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row"><a href="{{route('post.show', $post->id)}}">{{$post->id}}            </a>
                </th>
                <th scope="row">{{$post->title}}</th>
                <td>{{$post->content}}</td>
                <td>{{$post->image}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
