<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\DashboardUser;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all_quizzes = Dashboard::all();
        $all_users = User::all();
        $num_of_quizzes = 1;
        $user_result = DashboardUser::where('user_id', '=', Auth::user()->id)->get();
        return view('publicsite.user_result', compact('user_result', 'num_of_quizzes', 'all_quizzes', 'all_users'));
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
        DashboardUser::create([
            'user_id' => Auth::user()->id,
            'quiz_id' => $request->id,
            'marks'  => $user_marks,
            'result' => $result
        ]);
        if($result === 'fail'){
            $image = 'bad.jpg';
            $class = 'red-class';
        }else{
            $image = 'good.jpg';
            $class = 'green-class';
        }
        $quiz_questions = $quiz->number_of_questions;
       return view('publicsite.show_result', compact('result', 'user_marks', 'image', 'quiz_questions', 'class'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
        $result = DashboardUser::find($id);
        $result->delete();
        return redirect()->route('result.index');
    }
}
