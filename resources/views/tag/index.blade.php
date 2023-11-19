@extends('layouts.main')

@section('content')
<h1> Tags </h1> 

@include('layouts.error-message')

@foreach($tags as $tag)
    <div class="alert alert-info">
        
        <h3>{{ $tag->id }}</h3>

        <p>{{ $tag->title }}</p>
        <a href="{{route('tag.show', $tag->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$tags->links()}}
    </div>

@endsection