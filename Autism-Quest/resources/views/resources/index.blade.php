

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class=" mt-4">Hospitals</h2>
        <div class="row">
            @foreach($hospitals->take(3) as $hospital)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4">
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

        <h2 class="mt-4">Educational Institutes</h2>
        <div class="row">
            @foreach($educationalInstitutes->take(3) as $institute)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4">
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
    </div>
@endsection
