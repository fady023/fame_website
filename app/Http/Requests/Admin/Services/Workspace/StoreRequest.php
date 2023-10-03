<?php

namespace App\Http\Requests\Admin\Services\Workspace;

use App\Models\Services\Workspace\Workspace;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "name" => ['required', 'max:200'],
            "description" => ['required', 'min:3', 'max:600'],
            "images" => ['nullable', 'array'],
            "images.*" => ["image", "max:" . (20 * 1024), 'mimes:png,jpg,jpeg'],
            "price" => ['required', 'numeric', 'min:0'],
            "currency_id" => ['required', 'numeric', 'exists:currencies,id'],
            "subscription_period" => ['required', 'numeric', 'min:0'],
            'subscription_interval' => ['required', 'in:' . implode(",", Workspace::SUBSCRIPTION_INTERVALS)],
            'availability' => ['required', 'boolean']
        ];
    }
}
