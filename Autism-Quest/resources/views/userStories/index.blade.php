@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/userStories.css') }}">
    <div class="container">
        <div class="row">
            @foreach($records as $record)
                <div class="col-md-4 mb-4 mt-4">
                    <div class="card h-100">
                        <img src="{{$record->image ? asset('storage/'.$record->image):asset('/images/userStory.jpg')}}" class="card-img-left vh-50" alt="{{ $record->title }}">
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