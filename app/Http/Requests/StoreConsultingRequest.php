<?php

namespace App\Http\Requests;

use App\Consulting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreConsultingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('consulting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'       => [
                'required'],
            'date'       => [
                'required',
                'date_format:' . config('panel.date_format')],
            'time_start' => [
                'required',
                'date_format:' . config('panel.time_format')],
            'time_end'   => [
                'date_format:' . config('panel.time_format'),
                'nullable'],
            'qty'        => [
                'required'],
        ];

    }
}
