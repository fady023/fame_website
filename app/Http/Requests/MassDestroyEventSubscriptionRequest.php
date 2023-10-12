<?php

namespace App\Http\Requests;

use App\EventSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEventSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_subscription_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:event_subscriptions,id',
        ];
    }
}
