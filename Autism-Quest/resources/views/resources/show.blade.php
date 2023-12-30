@extends('layouts.app')

@section('content')
<style>
    body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
}
</style>
<div class="container">
    <section class="vh-100">
        <div style="width:100%; height:70px; background-color:#9AD0C2" class="mt-4 rounded text-center text-dark mx-auto border border-dark">
            <h2 class="mt-3">Hospitals</h2>
        </div>    
        <div class="row mb-6">
            @foreach($hospitals->take(3) as $hospital)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4  h-100 bg-white">
                        <img src="images/hospital.jpg" class="card-img-top" alt="{{ $hospital->title }}">    
                        <div class="card-body">
                            <h5 class="card-title">{{ $hospital->name }}</h5>
                            <p class="card-text">{{ $hospital->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $hospital->location }}</p>
                        </div>
                        <div class="card-footer text-center" style="display: flex; justify-content: center;">
                            <a href="/resources/edit/{{$hospital->id}}" class="btn btn-secondary mx-2">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/resources/delete/{{$hospital->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-2">Delete <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>    
                    </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $hospitals->links('pagination::bootstrap-4') }} <!-- Bootstrap pagination links for educational institutes -->
        </div>
    </section>

    <section class="vh-100">
        <div style="width:100%; height:70px; background-color:#9AD0C2" class="mt-4 rounded text-center text-dark mx-auto border border-dark">
            <h2 class="mt-3">educational Institutes</h2>
        </div>  
        <div class="row">
            @foreach($educationalInstitutes->take(3) as $institute)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4  h-100 bg-white">
                        <img src="images/school.jpg" class="card-img-top" alt="{{ $institute->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $institute->name }}</h5>
                            <p class="card-text">{{ $institute->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $institute->location }}</p>
                        </div>
                        <div class="card-footer text-center" style="display: flex; justify-content: center;">
                            <a href="/resources/edit/{{$institute->id}}" class="btn btn-secondary mx-2">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/resources/delete/{{$institute->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-2">Delete <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>    
                    </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $educationalInstitutes->links('pagination::bootstrap-4') }} <!-- Bootstrap pagination links for educational institutes -->
        </div>
    </section>
</div>
@endsection
