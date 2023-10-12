<?php

namespace App\Http\Requests\User;

use App\Models\Network\SuccessStory;
use Illuminate\Foundation\Http\FormRequest;

class SuccessStoryRequest extends FormRequest
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
        if ($this->isMethod("POST")) {
            return SuccessStory::$createRules;
        } elseif ($this->isMethod("PUT") || $this->isMethod("PATCH")) {
            return SuccessStory::$updateRules;
        }
        return [];
    }
}
