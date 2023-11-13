@extends('layouts.main')

@section('content')
<h1> SHOW POST </h1> 

    <div class="alert alert-info">
        
        <h3>{{ $post->id }}</h3>

        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
        <a href="{{route('posts.edit', $post->id)}}"><button class='btn btn-warning'>Edit</button></a>
        <a href="{{route('posts.destroy', $post->id)}}"><button class='btn btn-danger'>Delete</button></a>


    </div>

@endsection