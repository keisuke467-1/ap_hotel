<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Room;

class ReserveController extends Controller
{
    public function index(Request $request)
    {




        $items = Reserve::all();



        return view('reserve.index',['items' => $items]);
    }
}