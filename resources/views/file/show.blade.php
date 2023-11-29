@extends('layouts.main')

@section('content')
<h1> Files </h1> 

    <div class="alert alert-info">
        <img src="{{ Storage::disk('')->url($file->path) }}" />
    </div>

@endsection