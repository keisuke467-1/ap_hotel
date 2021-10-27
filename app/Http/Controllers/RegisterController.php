<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'お名前を入力してください',
        ];
    }
}
