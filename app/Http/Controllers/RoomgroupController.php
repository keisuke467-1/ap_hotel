<?php

namespace App\Http\Controllers;

use App\Roomgroup;
use Illuminate\Http\Request;

class RoomgroupController extends Controller
{
    public function index()
    {
        $items = Roomgroup::all();
        return view('roomgroup.index',['items' => $items]);
    }
}
