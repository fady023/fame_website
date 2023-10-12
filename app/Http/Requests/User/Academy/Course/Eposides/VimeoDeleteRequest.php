<?php

namespace App\Http\Requests\User\Academy\Course\Eposides;

use Illuminate\Foundation\Http\FormRequest;

class VimeoDeleteRequest extends FormRequest
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
            "video_url" => ['required', 'string', 'min:4']
        ];
    }
}
