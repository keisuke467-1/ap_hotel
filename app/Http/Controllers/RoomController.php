<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Reserve;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'roomgroup' => $request->roomgroup,
            'rooms' => $request->rooms,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out
        ];

        // 空の配列
        $rooms_data = array();

        //Reserveモデルに書いたスコープを使って、予約のかぶっているreserveレコードをgetしている
        // -> で条件を絞ってる。繋げてる。orWhereで　または　になる
        $reserved_id = Reserve::SearchCheckin($request->check_in)->orWhere->SearchCheckout($request->check_out)
            ->orWhere->SearchCheckReserve($request->check_in, $request->check_out)
            ->get();

        //予約されている部屋の部屋の番号（101とか）を
        //１個ずつ取り出してる
        foreach ($reserved_id as $item) {
            $rooms_data[] = Reserve::find($item->id)->rooms->first()->room_numbers;
        }


        //上のforeachで取ってきた部屋の番号以外の番号がほしい

        // Roomモデルを使って、
        // 送られてきた人数(rooms)を引数として
        // SeachCapacityに渡して処理してもらう（Roomモデルに書く）。その結果と、（かつ）
        // roomgroups_id（カラム名）と
        // 送られてきた情報（roomgroup）が一致する全てをゲットする

        $rooms_test = Room::whereNotIn('room_numbers', $rooms_data)->SearchCapacity($request->rooms)->where('roomgroups_id', $request->roomgroup)->get();


        return view('room.index', ['items' => $rooms_test], $data);
    }

    public function room_select(Request $request)
    {
        //'room_number'のところに、上の$rooms_testをいれたいけど。。
        //要するに空いてる部屋のroom_numbersと比べたい
        $items = Room::where('room_numbers', $request->room_numbers)->get();
        return view('room.room_select', ['items' => $items]);
    }

    // public function room
}
