<?php

namespace App\Http\Requests;

use App\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'photo' => [
                'required'],

        ];

    }
}
