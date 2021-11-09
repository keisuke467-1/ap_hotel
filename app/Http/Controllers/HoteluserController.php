<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoteluser;

class HoteluserController extends Controller
{
    public function index(Request $request)
    {
        $items = Hoteluser::all();
        return view('hoteluser.index', ['items' => $items]);
    }
}
