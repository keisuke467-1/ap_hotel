<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'register')
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
            'mail' => 'email',
            'tel' => 'digits_between:8,11',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'tel.digits_between' => '電話番号はハイフンなしで入力ください。',
        ];
    }

    public function data()
    {
        return [
            'name',
            'mail',
            'tel'
        ];
    }
}
