<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SingleQuizController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('publicsite.index');
});

Route::get('/about', function () {
    return view('publicsite.about');
})->name('about');

Route::get('/user_profile', function () {
    return view('publicsite.user_profile');
});

Route::resource('dashboard', DashboardController::class);


// CRUD for quizzes
Route::resource('quiz', QuizController::class);

// CRUD for questions
Route::resource('question', QuestionController::class);

// CRUD for users
Route::resource('user', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['isAdmin'])->group(function () {

    //admin routes

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('adminIndex');
});

Route::middleware(['auth'])->group(function () {
    Route::get('instructions/{id}', function(){
        return view('publicsite.instructions');
    })->name('instructions');
});

