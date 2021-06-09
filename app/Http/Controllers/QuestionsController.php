<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestion;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function fetchAll()
    {
        return view('questions', [
            'questions' => Question::all()->sortByDesc('created_at')
        ]);
    }

    public function fetch($id)
    {
        $question = Question::findOrFail($id);
        return view('question', [
            'question_id' => $id,
            'question_title' => $question->title,
            'answers' => $question->answers()->get()->sortBy('created_at')
        ]);
    }

    public function submit(CreateQuestion $request)
    {
        $vals = $request->validated();
        Question::create([
            'title' =>  $vals['question']
        ]);

        return redirect('/');
    }
}
