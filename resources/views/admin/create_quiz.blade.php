@extends('admin.layouts.master')

@section('content')
<div class="col-lg-9 create-quiz-form">
    <div class="card ">
        <div class="card-header">
            <strong>Create Quiz</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('quiz.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Quiz Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="quiz_name" placeholder="quiz name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Quiz Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="text-input" name="quiz_image" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Quiz Time</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" placeholder="quiz time" name="quiz_time" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Number of Questions</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" placeholder="number of questions" name="number_of_questions" class="form-control">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Create
                    </button>
            </form>
        </div>
    </div>
    @endsection