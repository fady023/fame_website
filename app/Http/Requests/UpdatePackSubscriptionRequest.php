<?php

namespace App\Http\Requests;

use App\PackSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePackSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pack_subscription_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'pack_id'    => [
                'required',
                'integer',
            ],
            'user_id'    => [
                'required',
                'integer',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date'   => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'pack_data'  => [
                'required',
            ],
        ];
    }
}
