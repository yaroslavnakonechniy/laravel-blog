@extends('layouts.admin')

@section('content')
<h1> Files </h1> 

@include('layouts.error-message')

<form action="{{route('admin.file.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="file">Title</label>
    <input type="file" class="form-control" id="path" name="path"  placeholder="Choose file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection