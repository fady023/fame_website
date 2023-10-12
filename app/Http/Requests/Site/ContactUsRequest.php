<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:40'],
            'email' => ['required', 'email', 'max:255'],
            'mobile' => ['nullable', 'min:10', 'max:20'],
            'message' => ['required', 'max:400'],
            'label_id' => ['required', 'numeric', 'exists:contact_us_labels,id']
        ];
    }
}
