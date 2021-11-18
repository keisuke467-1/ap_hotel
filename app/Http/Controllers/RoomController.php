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
        $items = Room::all();
        return view('room.index',['items' => $items],$data);
    }
}


