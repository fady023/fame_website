<?php

namespace App\Http\Requests;

use App\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'         => [
                'required',
            ],
            'description'  => [
                'required',
            ],
            'start_date'   => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'date_end'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'location_url' => [
                'required',
            ],
            'type'         => [
                'required',
            ],
            'packs.*'      => [
                'integer',
            ],
            'packs'        => [
                'array',
            ],
        ];
    }
}
