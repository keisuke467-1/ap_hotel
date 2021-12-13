@extends('layouts.register')

@section('title','reserve.index')

@section('menubar')
    @parent
    【予約一覧】
    <p>【{{Session::get('name')}}】様の予約状況</p>
@endsection

@section('content')
    <table>
        <tr><th>予約ID</th><th>利用者ID</th><th>お名前</th><th>アドレス</th><th>電話番号</th><th>宿泊人数</th><th>チェックイン</th><th>チェックアウト</th><th></th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->hoteluser_id}}</td>
                        <td>{{$item->hoteluser->name}}</td>
                        <td>{{$item->hoteluser->address}}</td>
                        <td>{{$item->hoteluser->tel}}</td>
                        <td>{{$item->Number_of_people}}人</td>
                        <td>{{$item->check_in}}</td>
                        <td>{{$item->check_out}}</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection