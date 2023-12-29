@extends('layouts.app')
@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-sm">
            <h2 class="text-center mb-4">Edit Story</h2>
            <form action="/userStories/update/{{$story->id}}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $story->title }}" required>
                    @error('title')
                        <p class="text-xs text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <!-- Tags -->
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ $story->tags }}" required>
                    @error('tags')
                        <p class="text-xs text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image" class="inline-block">Photo:</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                    @error('image')
                        <p class="text-xs text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Story Text Area -->
                <div class="form-group">
                    <label for="story">Story:</label>
                    <textarea class="form-control" id="story" name="story" rows="5" required>{{ $story->story }}</textarea>
                    @error('story')
                        <p class="text-xs text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection