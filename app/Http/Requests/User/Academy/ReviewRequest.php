<?php

namespace App\Http\Requests\User\Academy;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            "rating" => ['required', 'numeric', 'min:1', 'max:5'],
            'body' => ['nullable', 'sometimes', 'min:4', 'max:600']
        ];
    }
}
