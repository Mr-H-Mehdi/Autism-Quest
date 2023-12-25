@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($records as $record)
                <div class="col-md-4 mb-4 mt-4">
                    <div class="card">
                        <img src="images/userStory.jpg" class="card-img-left" alt="{{ $record->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $record->title }}</h5>
                            <p class="card-text">{{ $record->story }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $records->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection