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

    public function clear(Request $request)
    {
        $items = DB::select('select * from hotelusers');
        DB::insert('insert into hotelusers (name, mail, tel) values (:name, :mail, :tel)');
        return view('form.clear');
    }
}
