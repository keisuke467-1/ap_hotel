<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoteluserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'tel' => 'digits_between:8,11',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'address.required' => '住所は必ず入力してください。',
            'tel.digits_between' => '電話番号はハイフンなしで8桁または11桁で入力してください。',
        ];
    }
}
