@extends('layouts.app')

@section('content')
<style>
    body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
}
</style>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-sm bg-white rounded">
            <h2 class="text-center mb-4">Register</h2>
            <form action="/users" method="POST">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" required>
                    @error('first_name')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" required>
                    @error('last_name')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"  required>
                    @error('email')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}"  required>
                    @error('password')
                        <p class="error text-xs text-danger mt-1">{{$message}}</p>  
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
            </form>

            <p class="text-center">Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</div>
@endsection
