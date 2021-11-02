<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('form.index',['msg'=>'フォームを入力：']);
    }

    public function check(RegisterRequest $request)
    {
        return view('form.check','data[]');
    }

    public function post(RegisterRequest $request)
    {
        return view('form.index',['msg'=>'正しく入力されました！']);
    }
}
