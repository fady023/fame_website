<?php

namespace App\Http\Requests\User\Settings;

use App\SocialTypes;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalDataRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'title' => ['nullable', 'string', 'min:2', 'max:70'],
            'brief' => ['nullable', 'string', 'min:' . User::RULES['brief']['min'], 'max:' . User::RULES['brief']['max']],
            'gender' => ['required', 'string', 'in:m,f'],
            'day' => ['required', 'numeric', 'between:1,31'],
            'month' => ['required', 'numeric',  'between:1,12'],
            'year' => ['required', 'numeric', ('between:' . now()->subYears(90)->year . ',' . now()->year)],
            'country_id' => ['nullable', 'numeric', 'exists:countries,id'],
            'mobile' => ['nullable', 'min:9', 'max:20'],
            'city' => ['nullable', 'string', 'min:2', 'max:30'],
            'specialization' => ['nullable', 'string', 'min:3', 'max:70'],
            'degree' => ['nullable', 'string', 'in:' . implode(",", config("degrees.names", []))],
            'job' => ['nullable', 'string', 'min:3', 'max:40'],
            'graduation_year' => ['nullable', 'numeric', ('between:' . now()->subYears(90)->year . ',' . now()->addYears(10)->year)],
            'accommodation_type' => ['sometimes', 'string', 'in:' . implode(",", User::accommodation_type)],
            'resident_number' => ['required_if:accommodation_type,resident', 'nullable', 'string' , 'min:3' , 'max:60'],
            'exp_years_num' => ['nullable', 'numeric', 'min:0', 'max:80'],
            'birthday' => ['nullable', 'date'],
            'socials' => ['min:0', 'max:' . SocialTypes::count()],
            'social.*.type_id' => ['sometimes', 'nullable' , 'exists:social_types,id'],
            'social.*.url' => ['sometimes', 'string', 'nullable', 'min:3', 'max:100']
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    public function prepareForValidation()
    {
        // generate birthday
        $birthdaty = now()->day($this->day)->month($this->month)->year($this->year)->toDate();
        $this->merge(['birthday' => $birthdaty]);

        // clear resident number if user in saudi
        if ($this->accommodation_type == "in_sa") {
            $this->merge([
                'resident_number' => null
            ]);
        }

    //     if ($this->has('socials') && is_array($this->socials)) {
    //         $socials = collect($this->socials)->filter(function ($social) {
    //             return !is_null($social['url']);
    //         });
    //         $this->merge(['socials' => $socials->toArray()]);
    //     }
    }
}
