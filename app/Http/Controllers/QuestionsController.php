<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestion;
use App\Models\Question;
use Illuminate\Support\Arr;

class QuestionsController extends Controller
{
    public function fetchAll()
    {
        $placeholder_question = $this->fetchPlaceholderQuestion();

        return view('questions', [
            'questions' => Question::all()->sortByDesc('created_at'),
            'placeholder' => $placeholder_question,
        ]);
    }

    private function fetchPlaceholderQuestion()
    {
        $path = resource_path() . '/questions.txt';
        $contents = file($path);
        $line = Arr::random($contents, 1);
        return str_replace('"', "", $line);
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
