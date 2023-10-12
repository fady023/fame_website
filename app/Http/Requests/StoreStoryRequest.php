<?php

namespace App\Http\Requests;

use App\Story;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreStoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('story_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'              => [
                'required'],
            'photo'             => [
                'required'],
            'title'             => [
                'required'],
            'short_description' => [
                'required'],
            'body'              => [
                'required'],
        ];
    }
}
