<?php

namespace App\Http\Requests\User\Academy\Course\Eposides;

use Fideloper\Proxy\TrustedProxyServiceProvider;
use Illuminate\Foundation\Http\FormRequest;

class VimeoUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "file" => ['required', 'file', 'mimes:mp4', 'max:' . (1024 * config('vimeo. vimeo_upload_max_size'))]
        ];
    }
}
