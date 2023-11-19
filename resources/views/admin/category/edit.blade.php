@extends('layouts.admin')

@section('content')
<h1>EDIT POSTS </h1> 
@include('layouts.error-message')
<form action="{{route('admin.category.update', $category->id)}}" method="post">
    @csrf
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}"  placeholder="Enter title">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection