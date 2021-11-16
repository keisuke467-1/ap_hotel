<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;

class ReserveController extends Controller
{
    public function index()
    {
        $items = Reserve::all();
        return view('reserve.index',['items' => $items]);
    }
}