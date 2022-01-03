@extends('publicsite.layouts.master')
@section('title', 'quiz')

@section('content')
<div class="quiz-container">

  <div class="page-header">
    <div class="container">
      <div class=" page-header-text category">Quize (<span class="questionsNum">5</span>):
        <span class="quiz-name"></span>
      </div>
    </div>
  </div>
  <div class="container result">
    <div class="row inner-page">
      <div class="d-flex justify-content-between align-items-center">
        <div><span class="timer timer_sec me-2"></span> <span class="time_left_txt"> Time left</span></div>
        <div><a href="dashboard.html" class="btn primaryBtn">Start Over</a></div>
      </div>
      <div class="col-lg-12 ">
        <div class="time_line"></div>

      </div>
      <div class="question"></div>
      <div class="answers all-answers"></div>
      <div class="d-flex justify-content-between mt-4">
        <div class="bullets">
          <div class="spans"></div>
        </div>
        <button class="btn primaryBtn px-4 submit-btn">next</button>
      </div>
    </div>
  </div>
</div>

<div class="result_box ">
  <div>
    <img class="result_img" src="" alt="">
  </div>
  <div class="complete_text">You've completed the Quiz!</div>
  <div class="score_text">
    <!-- Here I've inserted Score Result from JavaScript -->
  </div>
  <div class="buttons">
    <button class="btn borderBtn btn-width mt-1 me-1 Show_Answer">Show Answer</button>
    <button class="btn primaryBtn btn-width mt-1 me-1 quit"><a class="white" href="dashboard.html">Quit</a></button>
  </div>
</div>
@endsection