<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoteluser;
use App\Roomgroup;
use App\Http\Requests\HoteluserRequest;


class HoteluserController extends Controller
{
    public function showindex()
    {
        $items = Hoteluser::all();
        return view('hoteluser.index', ['items' => $items]);
    }

    public function add()
    {
        return view('hoteluser.add');
    }

    public function create(Request $request)
    {
        //送られてきた個人情報をデータベースにいれてる
        $hoteluser = new Hoteluser;
        $form = $request->all();
        unset($form['_token']);
        $hoteluser->fill($form)->save();
        return view('form.clear');
    }


    public function check(HoteluserRequest $request)
    {
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
            'msg'=>'これで登録しますか？'
        ];
        return view('form.check',$data);
    }

    public function allusers()
    {
        $items = Hoteluser::all();
        return view('hoteluser.alluser',['items' => $items]);
    }

    public function login()
    {
        return view('hoteluser.login');
    }

    //送られてきた個人情報とhotelusersテーブルの内容と
    //一致するか確認して、あってたら【空き部屋照会】にとぶ

    public function login_check(HoteluserRequest $request)
    {
                //送られてきた個人情報
        // $data = [
        //     'name' => $request->name,
        //     'address' => $request->address,
        //     'tel' => $request->tel,
        // ];



        $login_login = Hoteluser::where('name',$request->name)->where('address',$request->address)->where('tel',$request->tel)->first();

        if (isset($login_login)){
            $items = Roomgroup::all();
            session(['user_id'=>$login_login->id]);
            $request->session()->put('name',$request->name);
            $request->session()->put('address',$request->address);
            $request->session()->put('tel',$request->tel);
            return view('hoteluser.index',['items' => $items]);
        }else{
            redirect()->route('login_check');
        }

    }
}
