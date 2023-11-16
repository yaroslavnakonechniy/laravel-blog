@extends('layouts.main')

@section('content')
<h1> POSTS </h1> 
<a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">Create new post</button></a>

@include('layouts.error-message')

@foreach($posts as $post)
    <div class="alert alert-info">
        
        <p>{{ $post->title }}</p>
        
        <a href="{{route('posts.show', $post->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$posts->links()}}
    </div>

@endsection