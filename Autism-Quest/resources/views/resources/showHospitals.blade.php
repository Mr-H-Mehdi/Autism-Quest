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
                        <img src="{{$hospital->image ? asset('storage/'.$hospital->image):asset('/images/hospital.jpg')}}" class="card-img-left vh-50" alt="{{ $hospital->title }}">   
                        <div class="card-body">
                            <h5 class="card-title">{{ $hospital->name }}</h5>
                            <p class="card-text">{{ $hospital->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $hospital->location }}</p>
                        </div>
                        <div class="card-footer text-center" style="display: flex; justify-content: center;">
                            <a href="/resources/view/{{$hospital->id}}" class="btn btn-secondary mx-2">View Details <i class="fa-solid fa-eye"></i></a>
                        </div>  
                    </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $hospitals->links('pagination::bootstrap-4') }} <!-- Bootstrap pagination links for educational institutes -->
        </div>
    </section>
@endsection