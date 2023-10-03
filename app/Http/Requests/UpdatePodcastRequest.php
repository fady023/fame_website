<?php

namespace App\Http\Requests;

use App\Podcast;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePodcastRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('podcast_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
