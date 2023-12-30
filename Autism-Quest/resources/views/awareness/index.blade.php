@extends('layouts.app')

@section('content')
<style>
    body{
    background-image: linear-gradient(to right, #fafab5 , #c9dcf9);
}
</style>
    <div class="container">
        <section class="row my-0 text-dark mb-0 shadow" id="section1">
            <div class="col-md-7">
                <img src="{{ asset('images/awareness1.jpg') }}" class="img-fluid awareness-image" alt="Image">
                <h2 class="display-4">Categorization</h2>
                <p class="lead">Categorization of Autism Spectrum Disorder (ASD) involves recognizing a spectrum of symptoms and behaviors that vary in severity and presentation. Historically, classifications like classic autism, Asperger's Syndrome, and PDD-NOS were used, but contemporary approaches, such as the DSM-5, adopt a more comprehensive perspective. These classifications aim to capture the diverse nature of ASD, emphasizing individual differences. While specific categories have evolved, the focus remains on understanding the unique characteristics of each person with autism, promoting inclusivity, and tailoring interventions to address their specific needs.</p>
            </div>
            <div class="col-md-5">
                <h2 class="display-4">What is Autism?</h2>
                <p class="lead">Autism, also known as Autism Spectrum Disorder (ASD), is a complex neurodevelopmental condition that impacts individuals in diverse ways. It is characterized by challenges in social interaction, communication difficulties, and repetitive behaviors. Autism is often referred to as a spectrum disorder because it manifests differently in each person, leading to a broad range of abilities and challenges. Some individuals with autism may have exceptional talents or strengths in specific areas, while others may face additional cognitive or learning difficulties. Understanding and embracing this diversity is crucial in fostering a supportive and inclusive environment for individuals with autism.</p>
                <div class="doodle-container" id="sun">
                    <img src="{{ asset('images/doodle2.png') }}" class="img-fluid" alt="Doodle">
                </div>
            </div>
        </section>

        <section class="row my-0 text-dark mb-0  shadow" id="section2">
            <div class="col-md-5">
                 <div class="doodle-container mt-0" id="clouds">
                    <img src="{{ asset('images/doodle1.png') }}" class="img-fluid" alt="Doodle">
                </div>
                <h2 class="display-4">Signs and Characteristics</h2>
                <p class="lead">Recognizing the signs and characteristics of autism is essential for early identification and support. Individuals with autism may experience challenges in social situations, including difficulty understanding social cues and forming connections with others. Communication differences can range from delayed speech development to repetitive language patterns. Repetitive behaviors, intense focus on specific interests, and sensory sensitivities are also common traits. It's important to note that the spectrum is vast, and each individual's experience is unique. Early intervention and tailored support can significantly enhance the quality of life for individuals with autism and contribute to their overall well-being.</p>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('images/awareness3.jpg') }}" class="img-fluid awareness-image" alt="Image">
                <div class="row mt-0" id="ques">
                    <div class="row mt-0" id="ques">
                        <div class="col-2">
                                <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                        </div>
                        <div class="col-2">
                        <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                    </div>
                    <div class="col-2">
                    <img src="{{ asset('images/questionMark.png') }}" class="img-fluid" alt="Doodle">
                    </div>
                </div>                
            </div>
        </section>

        <section class="row my-0 text-dark mb-0  shadow" id="section3">
            <div class="col-md-7">
                <img src="{{ asset('images/awareness2.jpg') }}" class="img-fluid awareness-image" alt="Image">
                <h2 class="display-4">Fun Fact</h2>
                <p class="lead">A fascinating and positive aspect about autism is the heightened sensory perception that some individuals with autism may possess. While sensory sensitivities are common in autism, some individuals experience heightened abilities in certain senses, such as hearing, sight, or touch. This can lead to unique talents and skills, such as an exceptional ability to notice details or an extraordinary sense of pitch. This phenomenon highlights the diversity of experiences within the autism spectrum and underscores the importance of embracing and celebrating the unique strengths and talents of individuals with autism.</p>
                
            </div>
            <div class="col-md-5">
                <h2 class="display-4">Causes and Factors</h2>
                <p class="lead">The exact causes of autism are complex and multifaceted, involving a combination of genetic, neurological, and environmental factors. Genetic predispositions play a significant role, with certain genetic mutations associated with an increased risk of autism. Differences in brain structure and function, prenatal factors, and environmental influences may contribute to the development of autism. Research in this field is ongoing, aiming to deepen our understanding of these factors. While the origins of autism are diverse, it's crucial to approach each individual with empathy and support, focusing on their unique strengths and abilities. Early diagnosis and intervention remain pivotal in providing the necessary resources for individuals with autism to thrive.</p>
                <img src="{{ asset('images/doodle4.png') }}" class="img-fluid" alt="Doodle">
            </div>
        </section>
    </div>
    <link href="{{ asset('css/awarenessStyles.css') }}" rel="stylesheet">
@endsection
