<?php

namespace App\Http\Requests;

class CreateQuestion extends Request
{

    public function rules()
    {
        return [
            'question' => 'required|string|min:5|max:255|ends_with:?',
        ];
    }
}
