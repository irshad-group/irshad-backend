<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MinistriesStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_en'   => 'bail|required|string',
            'title_ar'   => 'bail|required|string',
            'title_kr'   => 'bail|required|string',
            'logo'       => 'bail|required|string',
            'krg'        => 'bail|required|boolean',
            'address'    => 'bail|required|string',
            'gps_lat'    => 'bail|required|string',
            'gps_lon'    => 'bail|required|string',
            'website'    => 'bail|required|string',
            'created_by' => 'bail|required|numeric',
        ];
    }
}
