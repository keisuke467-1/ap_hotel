@extends('layouts.register')

@section('title','roomgroup.index')

@section('menubar')
    @parent
    【空き部屋照会】
@endsection

@section('content')
    <table>
        <tr><th>ID</th><th>部屋の種類</th><th>最大宿泊可能人数</th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->max_capacity}}人</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
    <hr>
    <form action="/room" methods="post">
        <table>
            @csrf
            <tr>
                <th>ID</th>
                <td><select name="roomgroup" id="select_num">
                    <option value="1" selected="selected">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select></td>
            </tr>
            <tr>
                <th>宿泊人数</th>
                <td><select name="rooms" id="select_num">
                    <option value="1" selected="selected">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
                <tr>
                    <th>チェックイン </th>
                    <td><input type="date" name="check_in" value="{{old('check_in')}}"></td>
                </tr>
                <tr>
                    <th>チェックアウト </th>
                    <td><input type="date" name="check_out" value="{{old('check_out')}}"></td>
                </tr>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="空き状況を検索"></td>
            </tr>
        </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection