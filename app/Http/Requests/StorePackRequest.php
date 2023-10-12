<?php

namespace App\Http\Requests;

use App\Pack;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePackRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pack_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'             => [
                'required'
            ],
            'pack_category_id' => [
                'required',
                'integer'
            ],
            'description'      => [
                'required'
            ],
            'color'            => [
                'required'
            ],
            'status'           => [
                'required'
            ],
            'order'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'
            ],
            'pack_services.*'  => [
                'integer'
            ],
            'pack_services'    => [
                'required',
                'array'
            ],
        ];
    }
}
