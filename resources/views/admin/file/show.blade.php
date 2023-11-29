@extends('layouts.admin')

@section('content')
<h1> Files </h1> 

    <div class="alert alert-info">
    <h2>{{$file->id}}</h2>
    <h4>{{$file->path}}</h4>
        <img src="{{ Storage::disk('')->url($file->path) }}" />
        <a href="{{route(  'admin.file.edit', $file->id   )  }}"><button class='btn btn-warning'>edit</button></a>
        <a href="{{route(  'admin.file.destroy', $file->id   )  }}"><button class='btn btn-warning'>delete</button></a>
    </div>

@endsection