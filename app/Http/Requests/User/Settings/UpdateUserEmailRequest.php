<?php

namespace App\Http\Requests\User\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserEmailRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255', 'unique:users,email,'  . auth()->id() . ',id']
        ];
    }
}
