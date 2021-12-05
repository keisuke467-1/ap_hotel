@extends('layouts.register')

@section('title','room.room_select')

@section('menubar')
    @parent
    【予約確認画面】
@endsection

@section('content')
IDじゃなくて'hoteluser'の'name'と
宿泊人数(rooms)と'check_in''check_out'がほしいよね
    <table>
        <tr><th>ID</th><th>部屋の種類</th><th>部屋番号</th><th>宿泊人数</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            {{-- <td>{{$item->roomgroups_id}}</td> --}}
            <td>{{$item->roomgroup->name}}</td>
            <td>{{$item->room_numbers}}</td>
            <td>{{$item->roomgroup->max_capacity}}人</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection