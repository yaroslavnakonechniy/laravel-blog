@extends('layouts.admin')

@section('content')
<h1> Tags </h1> 
<a href="{{route('admin.tag.create')}}"><button type="button" class="btn btn-success">Create new tag</button></a>

@include('layouts.error-message')

@foreach($tags as $tag)
    <div class="alert alert-info">
        
        <h3>{{ $tag->id }}</h3>

        <p>{{ $tag->title }}</p>
        <a href="{{route('admin.tag.show', $tag->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$tags->links()}}
    </div>

@endsection