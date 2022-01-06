@extends('admin.layouts.master')

@section('content')
<!-- Quizzes Table -->
<div class="row all-quizzes-table">
    <div class="col-md-12 ">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">All Quizzes</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                </div>
            </div>
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{route('quiz.create')}}">
                    <i class="zmdi zmdi-plus"></i>ADD QUIZ</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Quiz Id</th>
                        <th>Quiz Name</th>
                        <th>User Name</th>
                        <th>Quiz Result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_results as $result)
                    <tr class="tr-shadow">
                        <td>{{$result->quiz_id}}</td>
                        @foreach($all_quizzes as $quiz)
                            @if($quiz->id === $result->quiz_id)
                        <td>{{$quiz->quiz_name}}</td>
                            @endif
                        @endforeach    
                        @foreach($all_users as $user)
                            @if($user->id === $result->user_id)
                        <td>{{$user->name}}</td>
                            @endif
                        @endforeach    
                        <td>{{$result->result}}</td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection