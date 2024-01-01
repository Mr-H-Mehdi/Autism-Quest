@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/userStories.css') }}">
    <div class="container">
        @if(count($stories) > 0)
            <div class="row">
                @foreach($stories as $story)
                    <div class="col-md-4 mb-4 mt-4">
                        <div class="card h-100">
                            <img src="{{$story->image ? asset('storage/'.$story->image):asset('/images/userStory.jpg')}}" class="card-img-left vh-50" alt="{{ $story->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $story->title }}</h5>
                                <p class="card-text">{{ $story->story }}</p>
                            </div>
                            <div class="card-footer text-center" style="display: flex; justify-content: center;">
                                <a href="{{ route('edit', ['id' => $story->id]) }}" class="btn btn-secondary mx-2">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/userStories/{{$story->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mx-2">Delete <i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>                        
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $stories->links('pagination::bootstrap-4') }}
            </div>
        @else
        <a style="text-decoration:none"href="/userStories/create">
            <div id="test" class="container text-center mt-5 shadow-sm bg-white rounded p-2 text-info border border-info">
                <h2>No stories found. Post one today!</h2>
            </div>
        </a>
        @endif
    </div>
@endsection
