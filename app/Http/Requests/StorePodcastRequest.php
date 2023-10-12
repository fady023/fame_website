<?php

namespace App\Http\Requests;

use App\Podcast;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePodcastRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('podcast_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'file' => [
                'required',
            ],
            'duration' => [
                'required', 'numeric'
            ]
        ];
    }
}
