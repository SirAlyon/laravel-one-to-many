@extends('layouts.admin')

@section('content')
    <h2>Create a new Post</h2> 
    @include('partials.error')

    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div class="form-group my-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" aria-describedby="titleHelp" value="{{old('title')}}">
            <small id="titleHelp" class="form-text text-muted">Type the post title, max: 150 charachters</small>
        </div>

        <div class="form-group my-3">
            <label for="cover_image">Cover Image</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image" aria-describedby="cover_imageHelp" value="{{old('cover_image')}}">
            <small id="cover_imageHelp" class="form-text text-muted">Type the cover image link</small>
        </div>

        <label for="categories">Categories</label>
        <select class="form-select " aria-label="Default select example" name="categories">
            <option selected>Choose Category...</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>  
            @endforeach
        </select>
        <small id="categoriesHelp" class="form-text text-muted my-3">Select post's category</small>


        <div class="form-group my-3">
            <label for="content">Content</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" aria-describedby="contentHelp" value="{{old('content‰')}}">
            <small id="contentHelp" class="form-text text-muted">Type the cover image link</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection