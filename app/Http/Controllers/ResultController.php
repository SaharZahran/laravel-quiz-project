<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Question;
use App\Models\QuizUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num_of_quizzes = 1;
        $user_result = QuizUser::where('user_id', '=', Auth::user()->id)->get();
        return view('publicsite.user_result', compact('user_result', 'num_of_quizzes', 'myclass'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = Dashboard::where('id', '=', $request->id)->first();
        $questions = Question::where('quiz_id', '=', $quiz->id)->get();
        $user_marks = 0;
        $number_of_question = 1;
        $result = '';
        foreach ($questions as $question) {
            $current_question = "question".$number_of_question;
            if($question->right_answer === $request->$current_question){
                $user_marks++;
            }
            $number_of_question++;
        }
        if($user_marks >= $quiz->number_of_questions/2){
            $result = 'success';
        }else{
            $result = 'fail';
        }
        QuizUser::create([
            'user_id' => Auth::user()->id,
            'quiz_id' => $request->id,
            'marks'  => $user_marks,
            'result' => $result
        ]);
        return redirect()->route('result.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
