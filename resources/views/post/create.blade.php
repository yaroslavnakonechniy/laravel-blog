@extends('layouts.main')

@section('content')
<h1>CREATE NEW POST</h1> 
@include('layouts.error-message')
<form action="{{route('posts.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" name="content" placeholder="Content">
  </div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-select" aria-label="Default select example" name="category_id" >
      @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection