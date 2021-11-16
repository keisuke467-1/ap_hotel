<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoteluserRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'hoteluser/add')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'email',
            'tel' => 'digits_between:8,11',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'address.email' => 'メールアドレスが必要です。',
            'tel.digits_between' => '電話番号はハイフンなしで8桁または11桁で入力してください。',
        ];
    }
}
