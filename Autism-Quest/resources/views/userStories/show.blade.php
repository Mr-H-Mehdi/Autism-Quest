@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($stories as $story)
                <div class="col-md-4 mb-4 mt-4">
                    <div class="card">
                        <img src="images/userStory.jpg" class="card-img-left" alt="{{ $story->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $story->title }}</h5>
                            <p class="card-text">{{ $story->story }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $stories->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection