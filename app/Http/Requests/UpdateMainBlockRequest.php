<?php

namespace App\Http\Requests;

use App\MainBlock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateMainBlockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('main_block_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'       => [
                'min:3',
                'max:500',
                'required',
            ],
            'description' => [
                'min:3',
                'max:500',
                'required',
            ],
        ];
    }
}
