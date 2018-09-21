<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Setting extends FormRequest
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
            'seo_description' => 'required',
            'seo_keyword' => 'required',
            'about' => 'required',
        ];
    }
}