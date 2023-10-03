<?php

namespace App\Http\Requests\User\Academy\Course\Eposides;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            "video_id" => ['required', 'numeric', 'integer'],
            "name" => ['required', 'min:10', 'max:100'],
            'description' => ['nullable', 'min:5', 'max:600'],
            'attachments' => ['sometimes', 'array', 'max:8'],
            'attachments.*' => ['file', 'mimes:png,jpg,jpeg,pdf,ppt,pptx,zip,docx', 'max:' . (40 * 1024)]
        ];
    }
}
