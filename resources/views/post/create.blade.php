@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title"
                       placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Title</label>
                <textarea class="form-control" id="content"
                          placeholder="Content" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Title</label>
                <input type="text" class="form-control" id="image"
                       placeholder="Image" name="image">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>

@endsection
