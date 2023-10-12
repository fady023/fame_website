<?php

namespace App\Http\Requests\User\Academy\Course\Project;

use Illuminate\Foundation\Http\FormRequest;

class StudentProjectRequest extends FormRequest
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
            "attachments" => [
                'nullable', 'sometimes', 'array', 'max:7'
            ],
            'attachments.*' => [
                'sometimes', 'file', 'max:' . (1024 * 40), 'mimes:png,jpg,docx,zip,jpeg,pdf,pptx'
            ],
            'name' => ['required', 'string', 'min:3', 'max:200'],
            'body' => ['required', 'string', 'min:3', 'max:600'],
            'url' => ['nullable', 'url', 'max:255']
        ];
    }
}
