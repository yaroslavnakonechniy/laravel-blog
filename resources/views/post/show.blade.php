@extends('layouts.main')

@section('content')
<h1> SHOW POST </h1> 

    <div class="alert alert-info">
        
    <h3>id:{{ $post->id }}</h3>

    <p>title: <b>{{ $post->title }}</b></p>
    <p>content: <b>{{ $post->content }} </b></p>
    <p>category: <b> 
        @foreach($categories as $category)             
             {{$category->id === $post->category_id ?  $category->title  : '' }}
        @endforeach
    </b></p>
        <a href="{{route('posts.edit', $post->id)}}"><button class='btn btn-warning'>Edit</button></a>
        <a href="{{route('posts.destroy', $post->id)}}"><button class='btn btn-danger'>Delete</button></a>


    </div>

@endsection