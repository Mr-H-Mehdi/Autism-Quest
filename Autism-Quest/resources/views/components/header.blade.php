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
            width:50px;
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
            @auth
            <li class="nav-item">
                <a class="nav-link" href="/yourStories/{{auth()->user()->id}}">Your Stories</a>
            </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="/gameArena">Game Arena</a>
            </li>
        </ul>
        
        <!-- Move the login and register links to the right -->
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