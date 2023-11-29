@extends('layouts.main')

@section('content')
<h1> Files </h1> 

@foreach($files as $file)
    <div class="alert alert-info">
    
        <img src="{{ Storage::disk('')->url($file->path) }}" />
        
        <a href="{{route('file.show', $file->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

    <div>
        {{$files->links()}}
    </div>

@endsection