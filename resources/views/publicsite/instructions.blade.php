@extends('publicsite.layouts.master')

@section('content')
<div class="info_box activeInfo">
    <div class="info-title"><span>Some Rules of this Quiz</span></div>
    <div class="info-list">
        <div class="info">
            1. Once you select your answer, it can't be undone.
        </div>
        <div class="info">
            2. You can't exit from the Quiz while you're playing.
        </div>
        <div class="info">
            3. You'll get points on the basis of your correct answers.
        </div>
    </div>
    <div class="buttons">
        <button class="btn borderBtn btn-width mt-1 me-1 quit"><a href='{{route("dashboard.index")}}'>Exit Quiz</a></button>
        <a class="btn primaryBtn btn-width mt-1 me-1 restart" href='{{route("singlequiz.index", ["id" => $id])}}'>Continue</a>
    </div>
</div>
@endsection