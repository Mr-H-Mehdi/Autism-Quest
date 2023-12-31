
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
            <h2 class="mt-3">Educational Institutes</h2>
        </div>    
        <div class="row mb-6">
            @foreach($educationalInstitutes->take(3) as $institute)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4  h-100 bg-white">
                        <img src="{{$institute->image ? asset('storage/'.$institute->image):asset('/images/school.jpg')}}" class="card-img-left vh-50" alt="{{ $institute->title }}">   
                        <div class="card-body">
                            <h5 class="card-title">{{ $institute->name }}</h5>
                            <p class="card-text">{{ $institute->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $institute->location }}</p>
                        </div>
                        <div class="card-footer text-center" style="display: flex; justify-content: center;">
                            <a href="/resources/view/{{$institute->id}}" class="btn btn-secondary mx-2">View Details <i class="fa-solid fa-eye"></i></a>
                        </div>    
                    </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $educationalInstitutes->links('pagination::bootstrap-4') }}
        </div>
    </section>
@endsection
