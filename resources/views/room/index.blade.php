@extends('layouts.register')

@section('title','room.index')

@section('menubar')
    @parent
    【部屋一覧】
@endsection

@section('content')
    <table>
        <tr><th>ID</th><th>部屋の種類</th><th>部屋番号</th><th>宿泊可能人数</th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        {{-- <td>{{$item->roomgroups_id}}</td> --}}
                        <td>{{$item->roomgroup->name}}</td>
                        <td>{{$item->room_numbers}}</td>
                        <td>{{$item->roomgroup->max_capacity}}人</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection