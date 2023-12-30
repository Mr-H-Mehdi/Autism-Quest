@extends('layouts.app')
@section('content')
<style>
    body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
}
</style>
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-8 shadow-sm bg-white">
            <h2 class="text-center mb-4">Add a Resource</h2>
            <form action="/resources/create" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Type Dropdown -->
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="HOSPITAL">Hospital</option>
                        <option value="EDUCATIONAL_INSTITUTE">Educational Institute</option>
                    </select>
                    @error('type')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
        
                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" class="form-control" id="description" name="description" required></textarea>
                    @error('description')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image" class="inline-block">Photo:</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                    @error('location')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <!-- Contact -->
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                    @error('contact')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
