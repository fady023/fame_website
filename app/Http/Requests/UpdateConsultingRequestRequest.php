<?php

namespace App\Http\Requests;

use App\ConsultingRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateConsultingRequestRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('consulting_request_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'subscription_id' => [
                'required',
                'integer'],
            'consulting_id'   => [
                'required',
                'integer'],
        ];

    }
}
