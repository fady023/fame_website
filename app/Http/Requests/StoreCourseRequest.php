<?php

namespace App\Http\Requests;

use App\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'     => [
                'min:3',
                'max:100',
                'required',
            ],
            'category_id' => [
                'min:3',
                'max:100',
                'required',
            ],
            'image'    => [
                'required',
            ],
            'packs.*'  => [
                'integer',
            ],
            'packs'    => [
                'array',
            ],
        ];
    }
}
