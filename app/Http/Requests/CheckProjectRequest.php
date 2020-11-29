<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'email' => 'required',
            'city' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'description.required' => 'The description is required',
            'email.required' => 'The email is required',
            'city.required' => 'The city is required',
        ];
    }
}
