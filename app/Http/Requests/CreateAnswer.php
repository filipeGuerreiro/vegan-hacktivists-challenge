<?php

namespace App\Http\Requests;

class CreateAnswer extends Request
{

    public function rules()
    {
        return [
            'answer' => 'required|string|min:5',
        ];
    }
}
