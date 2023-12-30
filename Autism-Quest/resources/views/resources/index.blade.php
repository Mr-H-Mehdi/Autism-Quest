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
                        <img src="{{$hospital->image ? asset('storage/'.$hospital->image):asset('/images/hospital.jpg')}}" class="card-img-left" alt="{{ $hospital->title }}">   
                        <div class="card-body">
                            <h5 class="card-title">{{ $hospital->name }}</h5>
                            <p class="card-text">{{ $hospital->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $hospital->location }}</p>
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
                        <img src="{{$institute->image ? asset('storage/'.$institute->image):asset('/images/school.jpg')}}" class="card-img-left" alt="{{ $institute->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $institute->name }}</h5>
                            <p class="card-text">{{ $institute->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $institute->location }}</p>
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
