@extends('layouts.register')

@section('title','room.room_select')

@section('menubar')
    @parent
    【選択された部屋】
@endsection

@section('content')
    <table>
        <tr><th>ID</th><td>{{$room_number}}</td></tr>
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection