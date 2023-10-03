<?php

namespace App\Http\Requests;

use App\PackageCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePackageCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('package_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'required',
                'unique:package_categories,name,' . request()->route('package_category')->id],
            'color'  => [
                'required',
                'unique:package_categories,color,' . request()->route('package_category')->id],
            'status' => [
                'required'],
            'order'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
        ];
    }
}
