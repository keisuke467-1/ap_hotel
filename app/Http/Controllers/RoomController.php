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
        $items = Room::where('roomgroups_id',$request->roomgroup)->get();
        return view('room.index',['items' => $items],$data);
    }

    public function room_select(Request $request)
    {
        $items = Room::where('room_numbers',$request->room_number)->get();
        return view('room.room_select',['items' => $items]);
    }

    // public function room
}


