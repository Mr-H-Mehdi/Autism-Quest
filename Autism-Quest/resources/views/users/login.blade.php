@extends('layouts.app')

@section('content')
<style>
footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}
body{
    background-image: linear-gradient(to right, #f9c9e2 , #c9dcf9);
}
</style>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-sm justify-content-center bg-white rounded">
            <h2 class="text-center mb-4">Login</h2>
            <form action="/users/login" method="POST">
                @csrf
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
                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
            </form>

            <p class="text-center">Don't have an account? <a href="/register">Register</a></p>
        </div>
    </div>
</div>
@endsection
