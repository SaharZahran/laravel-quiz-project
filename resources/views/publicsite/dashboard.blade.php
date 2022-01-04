@extends('publicsite.layouts.master')
@section('title', 'dashboard')

@section('content')
<section class="dashboard">
    @if(Auth::user() !== null)
    <div class="page-header">
        <div class="container">
            <div class="page-header-text">
                <div class="dashboard-header d-flex">
                    <div class="d-flex align-items-center flex-column ">
                        <div id="profileImg" class="dashboard-center ">
                            <img class="dashboard-img" src="{{asset('assets/public_images/'.Auth::user()->image)}}" alt="" id="profile">
                        </div>
                        <div class="welcome">
                            <div class="dashboard-title">Hi <span id="username">{{Auth::user()->name}}</span> !</div>
                            <div class="dashboard-des">Welcome back</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container ">
        <div class="quizes-title">
            <div class="quize-bold">Quizes</div>
            <div class="quize-des">Test your knowledge</div>
        </div>
        <div class="row quizes-padding ">
            @foreach($all_quizzes as $quiz)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="quizes-card">
                    <div class="box_grid">
                        <img src="{{asset('assets/public_images/'.$quiz->quiz_image)}}" alt="quiz_image">
                        <div class="quiz-card">
                            <div class="card-title">
                                {{$quiz->quiz_name}}
                            </div>
                            <ul>
                                <li> <i class="far fa-book-open"></i><span class="mx-1 ahmad">{{$quiz->number_of_question}}</span><span class="dm-none ahmad">Question</span></li>
                                <li> <i class="far fa-history"></i><span class="mx-1 ahmad">{{$quiz->quiz_time}}</span><span class="dm-none ahmad">Minutes</span></li>
                                @auth
                                <li><a href="{{route('instructions', ['id' => $quiz->id])}}" id="quizStart1" class="btn primaryBtn start-btn ">Start</a></li>
                                @endauth
                                @guest
                                <form action="/register" method="get">
                                    <li><button id="quizStart1" class="btn primaryBtn start-btn ">Start</button></li>
                                </form>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection