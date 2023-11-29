@extends('layouts.main')

@section('content')
<h1> Files </h1> 

    <div class="alert alert-info">
        <img src="{{ Storage::disk('')->url($file->path) }}" />
        <a href="{{route('file.download',$file->id)}}"><button class='btn btn-danger'>download</button></a>
    </div>

@endsection