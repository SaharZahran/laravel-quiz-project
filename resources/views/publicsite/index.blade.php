@extends('publicsite.layouts.master')
@section('title', 'Home')

@section('content')
<!-- End Navbar -->
<section class="home-page ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-7 col-md-6 hero  mt-5">
                <div class="hero-title">
                    Find The Best Quizzes!
                </div>
                <div class="hero-des">
                    Hey! would you link to grow up your skill and if you are interested to do just start here.
                </div>
                <a href="{{route('register')}}" class="btn primaryBtn btn-width mt-4 ">Sign Up</a>
            </div>
            <div class="col-lg-5 col-md-6  mt-5">
                <div class="home-img">
                    <img src="{{asset('assets/public_images/hero-img.png')}}" alt="hero-image">
                </div>
            </div>
        </div>
        <div>
</section>
@endsection