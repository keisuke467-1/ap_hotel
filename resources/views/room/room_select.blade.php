@extends('layouts.register')

@section('title','room.room_select')

@section('menubar')
    @parent
    【予約確認画面】
@endsection

@section('content')
    <table>
        <tr><th>部屋の種類</th><th>部屋番号</th><th>宿泊人数</th><th>チェックイン</th><th>チェックアウト</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{Session::get('roomgroup_name')}}</td>
            <td>{{Session::get('room_numbers')}}</td>
            {{-- Roomコントローラーでsessionに入れたのを取り出してる --}}
            <td>{{Session::get('number_of_people')}}人</td>
            <td>{{Session::get('check_in')}}</td>
            <td>{{Session::get('check_out')}}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection