<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Add your custom stylesheets if needed -->
    <title>Autism Quest</title>
    <style>
        /* Custom style to resize the logo in the navbar */
        .navbar-brand img {
            height: 50px; /* Adjust the height as needed */
            width:90px;
        }
    
        a {
            text-decoration: none; /* Remove underline from the link */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <a class="navbar-brand font-weight-bold" href="/"><img src="{{ asset('images/autismQuestLogo.png') }}" alt="Logo"> Autism Quest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/awareness">Awareness</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/resources">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/userStories">User Stories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutUs">About Us</a>
            </li>
            @auth
            @if (auth()->user()->role === 'user')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Your Stories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/userStories/{{auth()->user()->id}}">View Stories</a>
                  <a class="dropdown-item" href="/userStories/create">Create Stories</a>
                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="/arena">Game Arena</a>
            </li>
            @endif
            @endauth
            @auth
            @if (auth()->user()->role === 'admin')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Update Resources
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/resources/show">View Resources</a>
                  <a class="dropdown-item" href="/resources/create">Create Resources</a>
                </div>
              </li>
            @endif
            @endauth
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item">
                <form class="nav-link inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn">Logout <i class="fa-solid fa-door-closed"></i></button>
                </form>
            </li>           
            @else
            <li class="nav-item">
                <a class="nav-link" href="/login">Login <i class="fa-solid fa-right-to-bracket"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register <i class="fa-solid fa-user-plus"></i></a>
            </li>
            @endauth
        </ul>
    </div>
</nav>