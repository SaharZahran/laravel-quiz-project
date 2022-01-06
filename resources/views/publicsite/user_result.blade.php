@extends('publicsite.layouts.master')

@section('content')
<div class="container result-table">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quiz Name</th>
                    <th scope="col">Quiz Mark</th>
                    <th scope="col">Result</th>
                    <th scope="col">Date of Quiz</th>
                    <th></th>
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
                    <td>
                        <form action="{{route('result.destroy', $result->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="trash">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
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
    <a href="{{route('dashboard.index')}}" class="btn back-sahar">Back To Dashboard</a>
</div>
@endsection