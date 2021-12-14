<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserve;
use App\Hoteluser;
use App\Room;
use App\Roomgroup;

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
        $reserve_last_id = reserve::pluck('id')->last();
        $reserve_room = reserve::find($reserve_last_id);

        $last_id = DB::table('reserve_room')->pluck('reserve_id')->last();

        $room_id = Room::where('room_numbers',session('room_numbers'))->value('id');

        $room_price = Roomgroup::where('name',session('roomgroup_name'))->value('price');

        $reserve_room->rooms()->attach([
            $last_id => [
                'reserve_id' => $reserve_last_id,
                'room_id' => $room_id,
                'room_numbers' => session('room_numbers'),
                'check_in' => session('check_in'),
                'check_out' => session('check_out'),
                'price' => $room_price
            ]
            ]);


        return view('reserve.clear');
    }
}