<?php

namespace App\Http\Requests\User\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UserDeactivationRequest extends FormRequest
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
            "delete_reason" => [
                'nullable', 'string', 'min:3', 'max:255'
            ],
            'delete_reason_other' => [
                'nullable', 'string', 'min:3', 'max:255'
            ]
        ];
    }
}
