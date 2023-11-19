@extends('layouts.main')

@section('content')
<h1> SHOW tag </h1> 

    <div class="alert alert-info">
        
        <h3>{{ $tag->id }}</h3>

        <p>{{ $tag->title }}</p>
    
    </div>

@endsection