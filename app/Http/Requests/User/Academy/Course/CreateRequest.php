<?php

namespace App\Http\Requests\User\Academy\Course;

use App\Models\Academy\Category;
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
        $categoryChilds = optional(Category::find($this->category))->ids();
        return [
            "name" => ['required', 'string', 'min:7', 'max:200'],
            'cover' => ['required', 'file', 'image', 'mimes:png,jpg,jpeg', 'max:' . (10 * 1024)],
            "description" => ['required', 'string', 'min:7', 'max:800'],
            "category_id" => ['required', 'numeric', 'exists:academy_categories,id', 'in:' . implode(',', $categoryChilds)]
        ];
    }
}
