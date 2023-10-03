<?php

namespace App\Http\Requests\User;

use App\Models\Network\Project;
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
        if ($this->isMethod("POST")) {
            return [
                'cover' => ['required', 'file', 'image', 'mimes:png,jpg,jpeg', 'max:' . (5 * 1024)],
                'name' => ['required', 'string', 'min:3', 'max:60'],
                'site' => ['nullable', 'url', 'max:190'],
                'brief' => ['required', 'string', 'min:20', 'max:500'],
                'problems' => ['nullable', 'string', 'min:20', 'max:800'],
                'future_plans' => ['nullable', 'string', 'min:20', 'max:800'],
                'team' => ['required', 'string', 'min:20', 'max:700'],
                'funding_amount' => ['required', 'numeric', 'exists:funding_amounts,amount'],
                'presentation' => ['required', 'file', 'mimes:pdf,ppt,pptx', 'max:' . (20 * 1024)],
                'video' => ['nullable', 'url', 'max:190'],
                'stage_id' => ['required', 'numeric', 'exists:proejcts_stages,id']
            ];
        } elseif ($this->isMethod("PUT") || $this->isMethod("PATCH")) {
            return [
                'cover' => ['sometimes', 'file', 'image', 'mimes:png,jpg,jpeg', 'max:' . (5 * 1024)],
                'name' => ['sometimes', 'string', 'min:3', 'max:60'],
                'site' => ['nullable', 'url', 'max:190'],
                'brief' => ['sometimes', 'string', 'min:20', 'max:500'],
                'problems' => ['sometimes', 'string', 'min:20', 'max:800'],
                'future_plans' => ['sometimes', 'string', 'min:20', 'max:800'],
                'team' => ['sometimes', 'string', 'min:20', 'max:700'],
                'funding_amount' => ['sometimes', 'numeric', 'exists:funding_amounts,amount'],
                'presentation' => ['sometimes', 'file', 'mimes:pdf,ppt,pptx', 'max:' . (20 * 1024)],
                'video' => ['nullable', 'url', 'max:190'],
                'stage_id' => ['sometimes', 'numeric',  'exists:proejcts_stages,id']
            ];
        }
        return [];
    }
}
