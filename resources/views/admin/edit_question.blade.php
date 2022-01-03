@extends('admin.layouts.master')

@section('content')
<div class="col-lg-9 create-quiz-form">
    <div class="card ">
        <div class="card-header">
            <strong>Edit Question</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('question.update', $question->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Question Text</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="question_text" value="{{$question->question_text}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Answer One</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="answer_one" value="{{$question->answer_one}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Answer Two</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="answer_two" value="{{$question->answer_two}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Answer Three</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="answer_three" value="{{$question->answer_three}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Answer Four</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="answer_four" value="{{$question->answer_four}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Right Answer</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="right_answer" value="{{$question->right_answer}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Quiz Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select class="form-select" aria-label="Default select example" name="quiz_name">
                            <option selected>{{$question->quiz->quiz_name}}</option>
                            @foreach($all_quizzes as $quiz)
                            <option>{{$quiz->quiz_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
            </form>
        </div>
    </div>
    @endsection