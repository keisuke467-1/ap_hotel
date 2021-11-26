<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'roomgroup' => $request->roomgroup,
            'rooms' => $request->rooms,
            'check_in' => $request->check_in,
            'check_out'=> $request->check_out
        ];
        // Roomモデルを使って、送られてきた人数の条件があっててかつ部屋種IDと一致する部屋のデータを取得する
        $items = Room::SearchCapacity($request->rooms)->where('roomgroups_id',$request->roomgroup)->get();
        // Reserveモデルを使って、チェックインチェックアウトが被ってない部屋のIDを取得する
        $days = Room::SearchDays($request->check_in,$request->check_out)->pluck('room_id');
        return view('room.index',['items' => $items],$data);
    }

    public function room_select(Request $request)
    {
        $items = Room::where('room_numbers',$request->room_number)->get();
        return view('room.room_select',['items' => $items]);
    }

    // public function room
}


