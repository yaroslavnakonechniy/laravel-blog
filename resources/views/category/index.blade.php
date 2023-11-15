@extends('layouts.main')

@section('content')
<h1> Categories </h1> 
<a href="{{route('category.create')}}"><button type="button" class="btn btn-success">Create new category</button></a>

@include('layouts.error-message')

@foreach($categories as $category)
    <div class="alert alert-info">
        
        <h3>{{ $category->id }}</h3>

        <p>{{ $category->title }}</p>
        
        <a href="{{route('category.show', $category->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

@endsection