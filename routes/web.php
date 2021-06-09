<?php

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('questions', [
        'questions' => Question::all()
    ]);
});

Route::post('questions', function (Request $request) {
    // TODO probably put this code into service...?
    Question::create([
        'title' => $request->content,
        'answers' => 0
    ]);

    return redirect('/');
});

Route::get('questions/{id}', function ($id) {
    return view('question', [
        'question_id' => $id,
        'answers' => Question::findOrFail($id)->answers()
    ]);
})->whereNumber('id');

Route::post('questions/{id}', function ($id, Request $request) {
    Answer::create([
        'question_id' => $id,
        'content' => $request->content
    ]);

    return redirect('questions/{$id}');
});
