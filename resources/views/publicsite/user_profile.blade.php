@extends('publicsite.layouts.master')

@section('content')
<div class="container user_profile">
    <div class="row">
        <h1>User Profile</h1>
        <div class="col-4">
            <ul>
                <li><img src="{{asset('assets/public_images/'. Auth::user()->image)}}" alt="user_image" class="user_image_profile"></li>
                <li class="info-user">{{Auth::user()->name}}</li>
                <li class="info-user">{{Auth::user()->email}}</li>
                <a href="{{route('user_profile.edit', Auth::user()->id)}}" class="btn btn-sahar">Edit Profile</a>
            </ul>
        </div>
        <div class="col-8">
            <h2>My Quizzes</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Quiz Name</th>
                        <th scope="col">Quiz Mark</th>
                        <th scope="col">Result</th>
                        <th scope="col">Date of Quiz</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_result as $result)
                    @foreach($all_quizzes as $quiz)
                    @if($result->quiz_id === $quiz->id)
                    <tr>
                        <th scope="row">{{$num_of_quizzes}}</th>
                        <td>{{$quiz->quiz_name}}</td>
                        <td>{{$result->marks}}</td>
                        <td>{{$result->result}}</td>
                        <td>{{$result->created_at}}</td>
                    </tr>
                    @php
                    $num_of_quizzes++;
                    @endphp
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection