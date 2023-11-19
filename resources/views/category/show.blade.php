@extends('layouts.main')

@section('content')
<h1> SHOW Category </h1> 

    <div class="alert alert-info">
        
        <h3>{{ $category->id }}</h3>

        <p>{{ $category->title }}</p>
        
    </div>

@endsection