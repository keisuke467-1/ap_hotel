@extends('layouts.register')

@section('title','room.index')

@section('menubar')
    @parent
    【部屋一覧】
@endsection

@section('content')
    <table>
        <tr><th>予約ID</th><th>利用者ID</th><th>お名前</th><th>アドレス</th><th>電話番号</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th><th></th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->roomgroups_id}}</td>
                        <td>{{$item->roomgroup->name}}</td>
                        <td>{{$item->roomgroup->max_capacity}}</td>
                        <td>{{$item->room_numbers}}</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection