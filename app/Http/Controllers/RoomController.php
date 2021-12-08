<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Reserve;
use App\Roomgroup;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'roomgroup' => $request->roomgroup,//部屋の種類のID
            'rooms' => $request->rooms,//宿泊人数
            'check_in' => $request->check_in,//チェックイン
            'check_out' => $request->check_out//チェックアウト
        ];
        
        //次のbladeに予約の入ってない部屋のレコードを表示して
        //選択してもらうために、段階を踏んで取得していく

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

        $room_name = Roomgroup::where('id',$request->roomgroup)->value('name');

        //リクエスト（$request）からsessionを使って、値を保持する
        $request->session()->put('roomgroup_name',$room_name);
        $request->session()->put('number_of_people',$request->rooms);
        $request->session()->put('check_in',$request->check_in);
        $request->session()->put('check_out',$request->check_out);


        return view('room.index', ['items' => $rooms_test], $data);
    }

    public function room_select(Request $request)
    {
        $items = Room::where('room_numbers', $request->room_numbers)->get();

        $request->session()->put('room_numbers',$request->room_numbers);

        return view('room.room_select', ['items' => $items]);
    }

}
