@extends('layouts.app')

@section('content')
<style>
    #myCarousel .carousel-control-prev-icon,
#myCarousel .carousel-control-next-icon {
    background-color: black;
}
body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-180183">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-180183">
					</li>
					<li data-slide-to="1" data-target="#carousel-180183" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-180183">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" 
                        style="filter:brightness(50%) blur(2.5px); height:80vh;"  alt="Carousel Bootstrap First"
                        src="https://images.unsplash.com/photo-1518101645466-7795885ff8f8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXV0aXNtfGVufDB8fDB8fHww" />
						<div class="carousel-caption">
							<h4 style="color:white;text-shadow: 3px solid white;">
								Autism Quest
							</h4>
							<p>
                                Welcome to Autism Quest, a compassionate platform dedicated to autism awareness. Navigate a community-driven space offering support, resources, and engaging learning games, fostering inclusivity for every child on the autism spectrum.
							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" style="filter:brightness(50%) blur(2.5px);  height:80vh;"  alt="Carousel Bootstrap Second" src="https://media.istockphoto.com/id/1471205962/photo/people-hand-holding-jigsaw-puzzle-color-puzzle-symbol-of-awareness-for-autism-spectrum.jpg?s=1024x1024&w=is&k=20&c=eDXXjbjvOMrKVyNhkzpxRbBw2RZnTk-e-8J1niqQgo0=" />
						<div class="carousel-caption">
							<h4>
								Autism Quest
							</h4>
							<p>
                                Embark on a journey of understanding and connection with Autism Quest. Our platform extends beyond awareness, providing a nurturing community, valuable resources, and interactive learning games. Together, let's create a world where every child thrives.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" style="filter:brightness(50%) blur(2.5px);  height:80vh;" alt="Carousel Bootstrap Third" src="https://images.pexels.com/photos/8386181/pexels-photo-8386181.jpeg?auto=compress&cs=tinysrgb&w=600" />
						<div class="carousel-caption">
							<h4>
								Autism Quest
							</h4>
							<p>
                                Gateway to Autism Awareness. Immerse yourself in a community that cares, explore valuable resources, find unwavering support, and let children embark on educational adventures through specially designed learning games. Join us in fostering a world that embraces diversity and inclusion.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-180183" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-180183" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
			<div class="row">
            <!-- <div class="col-md-12"> <h3 style="text-align:center; margin-top:50px;"> Welcome to Autism Quest </h3> <p> Our platform aims to provide a supportive and inclusive environment for individuals with autism spectrum disorder (ASD) and their families. Through the platform, we hope to promote awareness about autism and offer assistance in overcoming challenges. By joining our community, you will have access to valuable resources, mentorship, and support. </p> </div>  -->
            <div class="col-md-12"> 
                <h3 style="text-align:center; margin-top:10px;"> Explore and Connect. </h3> 
            <p> 
                Throughout the platform, you will find a wealth of information and resources on autism. You can also connect with other individuals and families who share similar experiences and perspectives. Our goal is to facilitate a sense of belonging and empowerment for everyone within our community. 

            </p> 
            
        </div> 
			</div>
            
            <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-6" >
                        <img alt="Bootstrap Image Preview" style=" max-height 100px; max-width:100%;"  src="https://images.pexels.com/photos/8386122/pexels-photo-8386122.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded" />
                    </div>
                    <div class="col-md-6">
                        <h2>
                        What is Autism?
						</h2>
                        <p style="text-overflow: ellipsis">
                            Autism, also known as Autism Spectrum Disorder (ASD), is a complex neurodevelopmental condition that impacts individuals in diverse ways. It is characterized by challenges in social interaction, communication difficulties, and repetitive behaviors. Autism is often referred to as a spectrum disorder because it manifests differently in each person, leading to a broad range of abilities and challenges. Some individuals with autism may have exceptional talents or strengths in specific areas, while others may face additional cognitive or learning difficulties. Understanding and embracing this diversity is crucial in fostering a supportive and inclusive environment for individuals with autism.
                        </p>
						<p>
							<a class="btn btn-primary btn-large" href="/awareness">Learn more</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img style="max-width:100%" alt="Bootstrap Image Preview" src="http://127.0.0.1:8000/images/hospital.jpg" />
				</div>
				<div class="col-md-4">
					<div style="max-height:100%" class="card bg-default">
						<h5 class="card-header">
							Resources
						</h5>
						<div class="card-body">
							<p class="card-text">
								This section contains the institutes and other important resources. It constitutes of all the support for the community.
							</p>
						</div>
						<div class="card-footer">
                        <p>
							<a class="btn btn-primary btn-large" href="/resources">Visit</a>
						</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
                    <img style="max-width:100%" alt="Bootstrap Image Preview" src="http://127.0.0.1:8000/images/school.jpg" />
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col-md-4">
					<div class="jumbotron">
						<h2>
							Share to the world
						</h2>
						<p>
							It's not bad to be different. Share to the world. They want to hear your story. Learn about others' experiences and tell them yours.
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Take me to the Stories</a>
						</p>
					</div>
				</div>
				<div class="col-md-8">
					<div id="myCarousel" class="carousel slide" id="carousel-611534">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-611534" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-611534">
							</li>
							<li data-slide-to="2" data-target="#carousel-611534">
							</li>
						</ol>
						<div class="carousel-inner" >
							<div class="carousel-item active">
								<img style="max-width:30%;"  class="d-block w-100" alt="Carousel Bootstrap First" src="{{asset('images/stories1.png')}}" />
                                
							</div>
							<div class="carousel-item">
								<img style="max-width:30%;"  class="d-block w-100" alt="Carousel Bootstrap Second" src="{{asset('images/stories1.png')}}" />
						
							</div>
							<div class="carousel-item">
								<img style="max-width:80%;"  class="d-block w-100" alt="Carousel Bootstrap Third" src="{{asset('images/stories1.png')}}" />
							</div>
						</div> <a class="carousel-control-prev" href="#carousel-611534" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-611534" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2 style="text-align:center;">
                    Learn with Fun 
				</h2>
				<p>
                    The last but not the least, we have a section for games where kids can play and learn at the same time. Our games are designed to help kids develop their cognitive, social, and emotional skills. Whether your child likes games or not, we have a game that suits their needs and interests. Explore our games and see how fun learning can be! 😊
				</p>
				<p style="text-align:center;" >
					<a class="btn btn-primary btn-large" href="/arena">Let's Play!</a>
				</p>
			</div>
		</div>
	</div>
</div>


@endsection
