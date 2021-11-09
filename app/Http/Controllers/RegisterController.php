<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('form.index',['msg'=> '入力フォーム']);
    }

    public function check(RegisterRequest $request)
    {
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'tel' => $request->tel,
        ];
        return view('form.check',$data,['msg'=>'これで登録しますか？']);
    }

    public function clear()
    {
        return view('form.clear',['msg'=>'登録が完了しました']);
    }

}
