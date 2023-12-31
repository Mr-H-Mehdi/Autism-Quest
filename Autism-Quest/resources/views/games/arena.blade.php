@extends('layouts.app')

@section('content')
<style>
     body{
        background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
     }
</style>
<section id="main-page" class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img class="card-img-top" src="{{ asset('gameImages/MathMania.png') }}" alt="Math Mania">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Math Mania</h5>
                    <a href="{{ asset('games/math mania/mathmania.html') }}" class="btn btn-primary mt-auto">Play</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img class="card-img-top" src="{{ asset('gameImages/bubblePop.png') }}" alt="Bubble Pop">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Bubble Pop</h5>
                    <a href="{{ asset('games/bubble pop/bubblepop.html') }}" class="btn btn-primary mt-auto">Play</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img class="card-img-top" src="{{ asset('gameImages/EmoExplosion.png') }}" alt="Num Bubble">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Emo Explosion</h5>
                    <a href="{{ asset('games/EmoExplosion/emoexplosion.html') }}" class="btn btn-primary mt-auto">Play</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
