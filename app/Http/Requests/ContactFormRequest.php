<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|max: 255|required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|max: 255',
            'message' => 'required|min: 10',
        ];
    }
}
