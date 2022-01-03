<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Dashboard;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_quizzes = Dashboard::all();
        return view('admin.quiz', compact('all_quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_quiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizRequest $request)
    {
        $request->validate([
            'quiz_image' => 'required|mimes:jpg,png,jpeg',
            'quiz_name' => 'required',
            'quiz_time' => 'required',
            'number_of_questions' => 'required'
        ]);

        $input = $request->all();
        if ($request->file("quiz_image")) {
            $newImageName = time() . '-' . $request->quiz_image->getClientOriginalName();
            $request->quiz_image->move(public_path('assets/public_images'), $newImageName);
            $input['quiz_image'] = 'assets/public_images/' . $newImageName;
        }
        Dashboard::create($input);
        return redirect()->route("quiz.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chosen_quiz = Dashboard::find($id);
        return view('admin.edit_quiz', compact('chosen_quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizRequest  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizRequest $request, $id)
    {
        $quiz = Dashboard::find($id);
        if($request->file('quiz_image')){
            $file = $request->quiz_image;
            $new_file = time().'-'.$file->getClientOriginalName();
            $file->move('assets/public_images', $new_file);
            $quiz->quiz_image = 'assets/public_images/'. $new_file;
        }

        $quiz->quiz_name = $request->quiz_name;
        $quiz->quiz_time = $request->quiz_time;
        $quiz->number_of_questions = $request->number_of_questions;

        $quiz->update();
        return redirect()->route('quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_quiz = Dashboard::find($id);
        $deleted_quiz->delete();
        return redirect()->route('quiz.index');
    }
}
