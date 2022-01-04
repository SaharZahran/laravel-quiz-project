@extends('publicsite.layouts.master')

@section('content')
<div class="container result-table">
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
            <tr>
                <th scope="row">{{$num_of_quizzes}}</th>
                <td>{{Auth::user()->name}}</td>
                <td>{{$result->marks}}</td>
                <td>{{$result->result}}</td>
                <td>{{$result->created_at}}</td>
            </tr>
            @php
            $num_of_quizzes++;
            @endphp
            @endforeach
        </tbody>
    </table>
    <a href="{{route('dashboard.index')}}" class="btn back-sahar">Back To Dashboard</a>
</div>
@endsection