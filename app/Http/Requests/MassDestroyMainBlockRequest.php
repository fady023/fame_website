<?php

namespace App\Http\Requests;

use App\MainBlock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMainBlockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('main_block_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:main_blocks,id',
        ];
    }
}
