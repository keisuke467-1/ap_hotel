<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoteluser;
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


}
