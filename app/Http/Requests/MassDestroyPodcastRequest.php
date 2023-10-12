<?php

namespace App\Http\Requests;

use App\Podcast;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPodcastRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('podcast_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:podcasts,id',
        ];
    }
}
