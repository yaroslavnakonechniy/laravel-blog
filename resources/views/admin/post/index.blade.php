@extends('layouts.admin')

@section('posts')

<h1> POSTS </h1> 
<a href="{{route('admin.posts.create')}}"><button type="button" class="btn btn-success">Create new post</button></a>

@include('layouts.error-message')

@foreach($posts as $post)
    <div class="alert alert-info">
        
        <p>{{ $post->title }}</p>
        
        <a href="{{route('admin.posts.show', $post->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$posts->links()}}
    </div>

@endsection