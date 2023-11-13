@extends('layouts.main')

@section('content')
<h1>EDIT POSTS </h1> 
<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}" placeholder="Content">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection