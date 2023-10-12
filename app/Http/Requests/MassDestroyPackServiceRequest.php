<?php

namespace App\Http\Requests;

use App\PackService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPackServiceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pack_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pack_services,id',
        ];
    }
}
