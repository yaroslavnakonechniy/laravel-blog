@extends('layouts.admin')

@section('content')
<h1> Files </h1> 

@include('layouts.error-message')

<a href="{{route('admin.file.create')}}"><button class='btn btn-warning'>Create new file</button></a>

@foreach($files as $file)
    <div class="alert alert-info">
    
        <img src="{{ Storage::disk('')->url($file->path) }}" />
        
        <a href="{{route('admin.file.show', $file->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$files->links()}}
    </div>

@endsection