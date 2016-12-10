<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseRequest extends FormRequest
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
            'case_mobile' => 'required|min:11|max:11',
            'case_hospital' => 'required|',
            'case_blood_type' =>'required|',
            'case_email' =>'required|',
            'case_name' =>'required|',

        ];
    }
}
