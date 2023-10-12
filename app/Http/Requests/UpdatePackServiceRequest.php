<?php

namespace App\Http\Requests;

use App\PackService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePackServiceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pack_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
                'unique:pack_services,title,' . request()->route('pack_service')->id,
            ],
        ];
    }
}
