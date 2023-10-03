<?php

namespace App\Http\Requests;

use App\PackageCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPackageCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('package_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:package_categories,id',
        ];
    }
}
