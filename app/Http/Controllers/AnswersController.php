<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnswer;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class AnswersController extends Controller
{
    public function submit($id, CreateAnswer $request)
    {
        $vals = $request->validated();
        Answer::create([
            'question_id' => $id,
            'content' => $vals['answer']
        ]);
        DB::table('questions')->increment('answers');

        return redirect("questions/{$id}/answers");
    }
}
