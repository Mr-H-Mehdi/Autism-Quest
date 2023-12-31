@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
    }
</style>
<div class="container">
    <section class="vh-100">
        <div style="width:100%; height:70px; background-color:#9AD0C2" class="mt-4 rounded text-center text-dark mx-auto border border-dark">
            <h2 class="mt-3">Details</h2>
        </div>    
        <div class="row mb-6">
            <div class="col-md-6 mt-4 justify-content-center mx-auto">
                <div class="card mb-4 h-100 bg-white">
                    @if($resource->type === 'HOSPITAL')
                        <img src="{{ $resource->image ? asset('storage/'.$resource->image) : asset('/images/hospital.jpg') }}" class="card-img-left" alt="{{ $resource->title }}">
                    @elseif($resource->type === 'EDUCATIONAL_INSTITUTE')
                        <img src="{{ $resource->image ? asset('storage/'.$resource->image) : asset('/images/school.jpg') }}" class="card-img-left" alt="{{ $resource->title }}">
                    @else
                        <img src="{{ $resource->image ? asset('storage/'.$resource->image) : asset('/images/default.jpg') }}" class="card-img-left" alt="{{ $resource->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $resource->name }}</h5>
                        <p class="card-text">{{ $resource->description }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $resource->location }}</p>
                        <p class="card-text"><strong>Contact:</strong> {{ $resource->contact }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $resource->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
