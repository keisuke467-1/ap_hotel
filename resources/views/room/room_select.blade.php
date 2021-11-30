@extends('layouts.register')

@section('title','room.room_select')

@section('menubar')
    @parent
    【予約確認画面】
@endsection

@section('content')
    <table>
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