@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: #FFFFEC;
    }
</style>
<div class="container">
    <section class="vh-100">
        <div style="width:100%; height:70px; background-color:#9AD0C2" class="mt-4 rounded text-center text-light mx-auto my-auto">
            <h2>Hospitals</h2>
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
                    </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $hospitals->links('pagination::bootstrap-4') }} <!-- Bootstrap pagination links for educational institutes -->
        </div>
    </section>

    <section class="vh-100">
        <div style="width:100%; height:70px; background-color:#9AD0C2" class="mt-4 rounded text-center text-light mx-auto my-auto">
            <h2>educational Institutes</h2>
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
