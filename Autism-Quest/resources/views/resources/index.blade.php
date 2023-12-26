
<x-header/>
    <div class="container">
        <h2 class=" mt-4">Hospitals</h2>
        <div class="row">
            @foreach($hospitals->take(3) as $hospital)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4  h-100">
                        <img src="images/hospital.jpg" class="card-img-top" alt="{{ $hospital->title }}">    
                        <div class="card-body">
                            <h5 class="card-title">{{ $hospital->name }}</h5>
                            <p class="card-text">{{ $hospital->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $hospital->location }}</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>

        <h2 class="mt-4">Educational Institutes</h2>
        <div class="row">
            @foreach($educationalInstitutes->take(3) as $institute)
            <div class="col-md-4 mt-4">
                    <div class="card mb-4  h-100">
                        <img src="images/school.jpg" class="card-img-top" alt="{{ $institute->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $institute->name }}</h5>
                            <p class="card-text">{{ $institute->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $institute->location }}</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $educationalInstitutes->links('pagination::bootstrap-4') }} <!-- Bootstrap pagination links for educational institutes -->
        </div>
    </div>
    
    <footer class="bg-light text-center py-3 sticky-bottom">
        <div class="container">
            <p>&copy; 2023 Autism Quest. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>
    </html>
    
