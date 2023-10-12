<?php

namespace App\Http\Requests;

use App\PackAttachment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePackAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pack_attachment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'          => [
                'min:3',
                'max:100'],
            'type'          => [
                'required'],
            'atachmentable' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
//            'file'          => [
//                ''],
        ];

    }
}
