<?php

namespace App\Http\Requests\Admin\Academy\Courses;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
           "name"=>"required",
           "description"=>"required|max:500",
           "price"=>"required|numeric",
           "category_id"=> "required",
           "user_id"=>"required|exists:users,id",
           //"active" =>"required"

        ];
    }
}
