@extends('layouts.admin')

@section('content')
<h1> SHOW Category </h1> 

    <div class="alert alert-info">
        
        <h3>{{ $category->id }}</h3>

        <p>{{ $category->title }}</p>
        
        <a href="{{route('admin.category.edit', $category->id)}}"><button class='btn btn-warning'>Edit</button></a>
        <a href="{{route('admin.category.destroy', $category->id)}}"><button class='btn btn-danger'>Delete</button></a>


    </div>

@endsection