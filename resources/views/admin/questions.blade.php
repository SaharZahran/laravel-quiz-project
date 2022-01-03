@extends('admin.layouts.master')
@section('style')
<style>
    .questions-table td{
        padding: 1.3rem !important;
    }
</style>
@endsection
@section('content')
<!-- Quizzes Table -->
<div class="row questions-table">
    <div class="col-md-12 ">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">All Questions</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                </div>
            </div>
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{route('question.create')}}">
                    <i class="zmdi zmdi-plus"></i>ADD QUESTION</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Question Test</th>
                        <th>Answer-1</th>
                        <th>Answer-2</th>
                        <th>Answer-3</th>
                        <th>Answer-4</th>
                        <th>Right Answer</th>
                        <th>Quiz Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_questions as $question)
                    <tr class="tr-shadow">
                        <td>{{$question->question_text}}</td>
                        <td>{{$question->answer_one}}</td>
                        <td>{{$question->answer_two}}</td>
                        <td>{{$question->answer_three}}</td>
                        <td>{{$question->answer_four}}</td>
                        <td>{{$question->right_answer}}</td>
                        <td>{{$question->quiz->quiz_name}}</td>
                        <td>
                            <div class="table-data-feature">
                                <form action="{{route('question.destroy', $question->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                                <a href="{{route('question.edit', $question->id)}}">
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