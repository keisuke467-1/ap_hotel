<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('form.index',['msg'=>'フォームを入力：']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'tel' => '^0\d{9,10}$',
        ];
        $this->validate($request, $validate_rule);
        return view('form.index',['msg'=>'正しく入力されました！']);
    }
}
