@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: linear-gradient(to right, #fafab5, #c9dcf9);
    }

    /* Set a specific height for the carousel container */
    .carousel-container, #awareness {
        height: 90vh;
		width:90%;
        overflow: hidden;
		margin: auto;
		border: 5px solid white;
		border-top: 0;
        box-sizing: border-box;
    }

    .carousel-item {
        height: 80%; 
    }
	.carousel-item img {
		object-fit: fill;
        width: 100%;
        height: 80%;
    }
	.carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 80%;
}
</style>

<section class="vh-100">
    <div class="carousel-container carousel slide shadow" id="carousel-180183">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#carousel-180183" class="active"></li>
            <li data-slide-to="1" data-target="#carousel-180183"></li>
            <li data-slide-to="2" data-target="#carousel-180183"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item  active">
                <img class="d-block w-100" style="filter:brightness(70%)" alt="Carousel Bootstrap First"
                     src="{{ asset('images/homeCarousal1.jpg') }}" />
                <div class="carousel-caption">
                    <h4 style="color:white;text-shadow: 3px solid white;">
                        Autism Quest
                    </h4>
                    <p>
                        Welcome to Autism Quest, a compassionate platform dedicated to autism awareness. Navigate a
                        community-driven space offering support, resources, and engaging learning games, fostering
                        inclusivity for every child on the autism spectrum.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="filter:brightness(70%)" alt="Carousel Bootstrap Second"
                     src="{{ asset('images/homeCarousal2.jpg') }}"/>
                <div class="carousel-caption">
                    <h4>
                        Autism Quest
                    </h4>
                    <p>
                        Embark on a journey of understanding and connection with Autism Quest. Our platform extends beyond
                        awareness, providing a nurturing community, valuable resources, and interactive learning games.
                        Together, let's create a world where every child thrives.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="filter:brightness(70%)" alt="Carousel Bootstrap Third"
                     src="{{ asset('images/homeCarousal3.jpg') }}" />
                <div class="carousel-caption">
                    <h4>
                        Autism Quest
                    </h4>
                    <p>
                        Gateway to Autism Awareness. Immerse yourself in a community that cares, explore valuable
                        resources, find unwavering support, and let children embark on educational adventures through
                        specially designed learning games. Join us in fostering a world that embraces diversity and
                        inclusion.
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-180183" data-slide="prev">
            <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
        <a class="carousel-control-next" href="#carousel-180183" data-slide="next">
            <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
    </div>
</section>
<section class="border-0" id="awareness">
    <div class="row">
        <div class="col-6 m-0 p-0 position-relative" style="height: 100vh; background-image: url('{{ asset('images/awarenessHome.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="text-left text-white" style="margin-top: 30%; margin-left:10%">
                <h1 class="text-left">Understanding
                    Autism</h1>
                <h6>What is Autism Spectrum Disorder? Learn about prevalence, signs & characteristics, causes, screening & diagnosis, and more.</h6>
                <a href="/awareness"><button class="btn btn-outline-light"><h4>Learn More</h4></button></a>
            </div>
        </div>
        <div class="col-6 m-0 p-0" style="height: 100vh">
            <img class="d-block w-100" style="width:30%;height:50%;border-bottom-right-radius:50%;border-top-left-radius:50%;border:2px solid lightgreen;" alt="rainbow"
                     src="{{ asset('images/homeResources.jpg') }}" />
                <div class="text-left text-success" style="margin-top:10%;margin-left:5%;  margin-right:5%">
                    <h1 class="text-left">Find the Best Resources</h1>
                    <h6>Bringing you the best educational and healtcare institutions from all over Pakistan so that you choose the best for your child.</h6>
                    <a href="/resources/hospitals"><button class="btn btn-outline-success"><h4>Learn More</h4></button></a>
                </div>
        </div>
    </div>
</section>

<section class="border-0 p-1 mt-4" id="awareness">
    <div class="row">
        <div class="col-6 m-0 p-0" style="height: 100vh">
                <div class="text-left text-info" style="margin-top:5%;margin-left:5%;  margin-right:5%">
                    <h1 class="text-left">Games Arena</h1>
                    <h6>Delve in the world of games, learn as you play and have fun. Register Now!</h6>
                    <a href="/arena"><button class="btn btn-outline-info"><h4>Learn More</h4></button></a>
                </div>
                <img class="d-block w-100" style="width:30%;height:60%;border-bottom-right-radius:50%;border-top-left-radius:50%;border:2px solid lightblue;" alt="rainbow"
                     src="{{ asset('images/homeGames.jpg') }}" />
        </div>
        <div class="col-6 p-0 mb-2 position-relative" style="height: 100vh; background-image: url('{{ asset('images/homeUserStories.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="text-left text-light" style="margin-top: 50%; margin-left:10%">
                <h1 class="text-left">Connect with the Community</h1>
                <h6>There are many ways to get involved in the Autism community. Whether it’s supporting a crucial initiative, attending an event, becoming an Autism Society member, or making a donation, the Autism Society is your connection to making a difference.</h6>
                <a href="/userStories"><button class="btn btn-outline-light"><h4>View Stories</h4></button></a>
            </div>
        </div>
    </div>
</section>


@endsection
