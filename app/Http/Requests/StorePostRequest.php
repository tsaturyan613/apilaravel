<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'name' => 'required|max:10',
            'email'=>'required|email',
            'subject'=>'required|max:50',
            'message'=>'required|max:550'
        ];
    }

//    /**
//     * Get the error messages for the defined validation rules.
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return [
//            'name.required' => 'Name is required!',
//            'email.required' => 'Email is required!',
//            'subject.required' => 'Subject is required!',
//            'message.required' => 'message is required!'
//        ];
//    }
}
