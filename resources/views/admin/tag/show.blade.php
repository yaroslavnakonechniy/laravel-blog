@extends('layouts.admin')

@section('content')
<h1> SHOW tag </h1> 

    <div class="alert alert-info">
        
        <h3>{{ $tag->id }}</h3>

        <p>{{ $tag->title }}</p>
        <a href="{{route('admin.tag.edit', $tag->id)}}"><button class='btn btn-warning'>Edit</button></a>
        <a href="{{route('admin.tag.destroy', $tag->id)}}"><button class='btn btn-danger'>Delete</button></a>


    </div>

@endsection