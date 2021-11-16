<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
        $items = Room::all();
        return view('room.index',['items' => $items]);
    }
}


