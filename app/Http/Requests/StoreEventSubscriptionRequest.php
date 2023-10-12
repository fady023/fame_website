<?php

namespace App\Http\Requests;

use App\EventSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEventSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_subscription_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'event_id' => [
                'required',
                'integer',
            ],
            'user_id'  => [
                'required',
                'integer',
            ],
        ];
    }
}
