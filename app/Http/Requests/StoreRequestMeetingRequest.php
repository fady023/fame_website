<?php

namespace App\Http\Requests;

use App\RequestMeeting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRequestMeetingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_us_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'required',
            ],
            'email'  => [
                'required',
            ],
            'mobile' => [
                'min:10',
                'max:10',
                'required',
            ],
            'note'   => [
                'required',
            ],
        ];
    }
}
