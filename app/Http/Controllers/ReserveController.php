<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Hoteluser;

class ReserveController extends Controller
{
    public function index()
    {
        $items = Hoteluser::find(session('user_id'))->reserves;
        return view('reserve.index',['items' => $items]);
    }

    public function clear()
    {
        // $hoteluser = new Hoteluser;
        // $form = $request->all();
        // unset($form['_token']);
        // $hoteluser->fill($form)->save();
        // return view('form.clear');

        $user_id = Hoteluser::where('tel',session('tel'))->where('address',session('address'))->value('id');

        $reserve_data = [
            'hoteluser_id' => $user_id,
            'Number_of_people' => session('number_of_people'),
            'check_in' => session('check_in'),
            'check_out' => session('check_out'),
        ];

        $reserve = new Reserve;
        unset($reserve_data['_token']);
        $reserve->fill($reserve_data)->save();

        //中間テーブルにさす！！
        


        return view('reserve.clear');
    }
}