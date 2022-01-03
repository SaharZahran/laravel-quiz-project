<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Dashboard;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_questions = Question::all();
        return view('admin.questions', compact('all_questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_quizzes = Dashboard::all();
        return view('admin.create_question', compact('all_quizzes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $quiz = Dashboard::where("quiz_name", '=', $request->quiz_name)->first();
        Question::create([
            'question_text' => $request->question_text,
            'answer_one' => $request->answer_one,
            'answer_two' => $request->answer_two,
            'answer_three' => $request->answer_three,
            'answer_four' => $request->answer_four,
            'right_answer' => $request->right_answer,
            'quiz_name' => $request->quiz_name,
            'quiz_id' => $quiz->id
        ]);
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $all_quizzes = Dashboard::all();
        return view('admin.edit_question', compact('question', 'all_quizzes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, $id)
    {
        $question = Question::find($id);
        $question->question_text = $request->question_text;
        $question->answer_one = $request->answer_one;
        $question->answer_two = $request->answer_two;
        $question->answer_three = $request->answer_three;
        $question->answer_four = $request->answer_four;
        $question->right_answer = $request->right_answer;
        $quiz = Dashboard::where('quiz_name', '=', $request->quiz_name)->first();
        $question->quiz_id = $quiz->id;
        $question->update();
        return redirect()->route('question.index');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('question.index');
    }
}
