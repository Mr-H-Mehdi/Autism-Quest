@extends('layouts.app')

@section('content')
<style>
    /* body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
} */
</style>

    <section id="main-page">
        <div class="maindiv">
            <div class="gamediv">
                <div class="mainpagedivs"><img  id="game-img" src="{{asset('images1/MathMania1.png')}}" alt="game image"><button><a href="{{asset('games/math mania/mathmania.html')}}">Math Mania</a></button></div>
                
            </div>
            <div class="gamediv">
                <div class="mainpagedivs"><img  id="game-img" src="{{asset('images1/galaxy.png')}}" alt="game image"><button><a href="{{asset('games/bubble pop/bubblepop.html')}}">Bubble Pop</a></button></div>

            </div>
            <div class="gamediv">
                <div class="mainpagedivs"><img  id="game-img" src="{{asset('images1/EmoExplosion.png')}}" alt="game image"><button><a href="{{asset('games/num bubble/index.html')}}">Num Bubble</a></button></div>

            </div>
        </div>
    </section>
    
    <link href="{{ asset('css/gamestyles/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gamestyles/styles.css') }}" rel="stylesheet">
@endsection
