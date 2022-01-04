@extends('publicsite.layouts.master')
@section('title', 'quiz')

@section('content')
<div class="quiz-container">
  <div class="page-header">
    <div class="container">
      <div class=" page-header-text category">Quiz (<span class="questionsNum">{{$quiz->number_of_questions}}</span>):
        <span class="quiz-name">{{$quiz->quiz_name}}</span>
      </div>
    </div>
  </div>
  <div class="container result">
    <div class="row inner-page">
      <div class="d-flex justify-content-between align-items-center">
        <div><span class="timer timer_sec me-2"></span> <span class="time_left_txt"> Time left</span></div>
        <div><a href="{{route('dashboard.index')}}" class="btn primaryBtn">Start Over</a></div>
      </div>
      <div class="col-lg-12 ">
        <div class="time_line"></div>

      </div>
      <form action='{{route("result.store")}}' method="POST" class="question-form">
        @csrf
        @foreach($all_questions as $question)
        <input type="hidden" name="id" value="{{$quiz->id}}">
        <label for="question_text" class="sahar-question-text">
          <input type="text" id="question_text" value="{{$question->question_text}}" disabled class="sahar-question">
        </label><br><br>
        <ul class="sahar-all-answers">
          <li>
            <input type="radio" id="answer_one{{$counter}}" name="{{'question'.$num_of_question}}" value="{{$question->answer_one}}" required>
            <label for="answer_one{{$counter}}" class="sahar-answer">1- {{$question->answer_one}}</label>
          </li>
          <li>
            <input type="radio" id="answer_two{{++$counter}}" name="{{'question'.$num_of_question}}" value="{{$question->answer_two}}" required>
            <label for="answer_two{{$counter}}" class="sahar-answer">2- {{$question->answer_two}}</label>
          </li>
          <li>
            <input type="radio" id="answer_three{{++$counter}}" name="{{'question'.$num_of_question}}" value="{{$question->answer_three}}" required>
            <label for="answer_three{{$counter}}" class="sahar-answer">3- {{$question->answer_three}}</label>
          </li>
          <li>
            <input type="radio" id="answer_four{{++$counter}}" name="{{'question'.$num_of_question}}" value="{{$question->answer_four}}" required>
            <label for="answer_four{{$counter++}}" class="sahar-answer">4- {{$question->answer_four}}</label>
          </li>
        </ul>
        @php
        $num_of_question++;
        @endphp
        @endforeach
        <button type="submit" class="btn btn-sahar my-button">submit</button>
      </form>
    </div>
  </div>
</div>

<!-- <div class="result_box ">
  <div>
    <img class="result_img" src="" alt="">
  </div>
  <div class="complete_text">You' ve completed the Quiz!</div>
        <div class="score_text"> -->
<!-- Here I've inserted Score Result from JavaScript -->
<!-- </div>
  <div class="buttons">
    <button class="btn borderBtn btn-width mt-1 me-1 Show_Answer">Show Answer</button>
    <button class="btn primaryBtn btn-width mt-1 me-1 quit"><a class="white" href="dashboard.html">Quit</a></button>
  </div>
</div> -->
@endsection