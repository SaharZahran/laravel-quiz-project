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
                        <th>Quiz Name</th>
                        <th>Quiz Image</th>
                        <th>Quiz Time</th>
                        <th>Number of Questions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_quizzes as $quiz)
                    <tr class="tr-shadow">
                        <td>{{$quiz->quiz_name}}</td>
                        <td><img src="{{$quiz->quiz_image}}" alt=""></td>
                        <td>{{$quiz->quiz_time}}</td>
                        <td>{{$quiz->number_of_questions}}</td>
                        <td>
                            <div class="table-data-feature">
                                <form action="{{route('quiz.destroy', $quiz->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                                <a href="{{route('quiz.edit', $quiz->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
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