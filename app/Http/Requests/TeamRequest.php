<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        'member_name' =>'required | min:3',
        'member_email' =>'required|min:4',
        'member_mobile'=>'required|min:11|max:11',
        'member_image'=>'mimes:png,jpg,jpeg',
        ];
    }
}
