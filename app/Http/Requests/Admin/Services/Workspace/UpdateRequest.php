<?php

namespace App\Http\Requests\Admin\Services\Workspace;

use App\Models\Services\Workspace\Workspace;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "name" => ["sometimes", 'max:200'],
            "description" => ['sometimes', 'min:3', 'max:600'],
            "images" => ['sometimes', 'nullable', 'array'],
            "images.*" => ["sometimes", "max:" . (20 * 1024), 'mimes:png,jpg,jpeg'],
            "price" => ['sometimes', 'numeric', 'min:0'],
            "currency_id" => ['sometimes', 'numeric', 'exists:currencies,id'],
            "subscription_period" => ['sometimes', 'numeric', 'min:0'],
            'subscription_interval' => ['sometimes', 'in:' . implode(",", Workspace::SUBSCRIPTION_INTERVALS)],
            'availability' => ['sometimes', 'boolean']
        ];
    }
}
