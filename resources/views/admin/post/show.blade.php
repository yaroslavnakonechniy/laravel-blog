@extends('layouts.admin')

@section('content')
<h1> SHOW POST </h1> 

    <div class="alert alert-info">
        
    <h3>id:{{ $post->id }}</h3>

    <p>title: <b>{{ $post->title }}</b></p>
    <p>content: <b>{{ $post->content }} </b></p>
    <p>category: <b> 
        @foreach($categories as $category)             
             {{$category->id === $post->category_id ?  $category->title  : '' }}
        @endforeach
    </b></p> 
    <div class="form-group">
    <label for="tag">tag: </label>
    <select multiple class="form-select" aria-label="Default select example" name="tag_id[]" >
      @foreach($tags as $tag)
        <option 
        >@foreach($post->tags as $postTag)
            {{$tag->id === $postTag->id ? $tag->title : '' }}
          @endforeach
        </option>
      @endforeach
    </select>
  </div>

        <a href="{{route('admin.posts.edit', $post->id)}}"><button class='btn btn-warning'>Edit</button></a>
        <a href="{{route('admin.posts.destroy', $post->id)}}"><button class='btn btn-danger'>Delete</button></a>


    </div>

@endsection