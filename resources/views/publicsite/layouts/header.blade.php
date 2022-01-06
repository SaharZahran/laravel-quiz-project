<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/quiz.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/sahar_edits.css')}}">
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="{{'/'}}">
                <img src="{{asset('../assets/public_images/logo.svg')}}" alt="Turtles">
            </a>
            <ul class="navbar-nav me-auto ">
                <li class="nav-item me-3">
                    <a class="nav-link" aria-current="page" href="{{route('dashboard.index')}}">Quizzes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
            </ul>
            <div>
                @if(Auth::user() === null)
                <a href="{{route('login')}}" class="btn secondaryBtn me-1">Login</a>
                <a href="{{route('register')}}" class="btn primaryBtn">Sign Up</a>
                @else
                <!--  -->
                <ul class="user-info-sahar">
                    <li>
                        <a href="{{route('user_profile.index')}}"><img src="{{asset('assets/public_images/' . Auth::user()->image)}}" alt="user image"></a>
                    </li>
                    <li>
                        <a href="{{'/user_profile'}}" role="button">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="btn primaryBtn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>
    <!-- End Navbar -->