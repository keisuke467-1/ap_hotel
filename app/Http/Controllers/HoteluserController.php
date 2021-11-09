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

    public function add(Request $request)
    {
        return view('hoteluser.add');
    }

    public function create(Request $request)
    {
        $hoteluser = new Hoteluser;
        $form = $request->all();
        unset($form['_token']);
        $hoteluser->fill($form)->save();
        return redirect('/hoteluser');
    }
}
