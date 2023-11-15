@extends('layouts.main')

@section('content')
<h1>CREATE NEW tag</h1> 
@include('layouts.error-message')
<form action="{{route('tag.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection