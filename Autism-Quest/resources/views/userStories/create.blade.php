@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/userStories.css') }}">
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-sm bg-white">
            <h2 class="text-center mb-4">Post a Story!</h2>
            <form action="/userStories/create" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" id="user_id" name="user_id" value="{{auth()->user()->id}}" hidden>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="id" class="form-control" id="title" name="title" required>
                    @error('title')
                    <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
        
                <!-- Tags -->
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" class="form-control" id="tags" name="tags" required>
                    @error('tags')
                    <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image" class="inline-block">Photo:</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                </div>

                <!-- Story Text Area -->
                <div class="form-group">
                    <label for="story">Story:</label>
                    <textarea class="form-control" id="story" name="story" rows="5" required></textarea>
                    @error('story')
                    <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
