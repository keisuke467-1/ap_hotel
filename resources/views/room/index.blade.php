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
                        <td>{{$item->roomgroup->max_capacity}}人まで</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
    <hr>
    <form action="/room_select" method="post">
        <table>
            @csrf
            <tr>
                <th>部屋番号を選択</th>
                <td><select name="room_numbers" id="select_num">
                    {{-- foreachで$items（部屋検索の結果）からroom_numbers（部屋番号）を出してる--}}
                    @foreach ($items as $item)
                        <option value={{$item->room_numbers}}>{{$item->room_numbers}}</option>
                    @endforeach
                </select></td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
    {{-- <table>
        <tr><th>ID</th><td>{{$roomgroup}}</td></tr>
        <tr><th>宿泊人数</th><td>{{$rooms}}人</td></tr>
        <tr><th>チェックイン</th><td>{{$check_in}}</td></tr>
        <tr><th>チェックアウト</th><td>{{$check_out}}</td></tr>
    </table>         --}}
@endsection

@section('footer')
    copyright 2021 okeke
@endsection