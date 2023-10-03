<?php

namespace App\Http\Requests\User\Academy\Course\Project;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "body" => ['required', 'min:3', 'max:800', 'string'],
            "name" => ['required', 'min:3', 'max:90', 'string']
        ];
    }
}
