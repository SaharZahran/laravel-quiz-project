@extends('publicsite.layouts.master')
@section('style')
<style>

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center border m-4"> <img src="{{asset('assets/public_images/'.$image)}}" class="sahar-image-result" alt="user result image " width="">
            <div>
                <h5 class="card-title">You <span class={{$class}}>{{$result}}</span></h5>
                <h5 class="card-title">Your score is {{$user_marks}} / {{$quiz_questions}}</h5>
                <a href="{{route('result.index')}}" class="btn btn-sahar">See All Result</a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

</div>
@endsection