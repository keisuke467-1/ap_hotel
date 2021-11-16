@extends('layouts.register')

@section('title','roomgroup.index')

@section('menubar')
    @parent
    【空き部屋照会】
@endsection

@section('content')
    <table>
        <tr><th>部屋の種類</th><th>宿泊可能人数</th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->max_capacity}}人</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
    <hr>
    <form action="/roomsearch/find" methods="post">
        <table>
            @csrf
            <tr>
                <th>チェックイン </th>
                <td><input type="date" name="check_in" value="{{old('check_in')}}"></td>
            </tr>
            <tr>
                <th>チェックアウト </th>
                <td><input type="date" name="check_out" value="{{old('check_out')}}"></td>
            </tr>
            <tr>
                <th>部屋の種類 </th>
                <td><input type="text" name="roomgroup" value="{{old('roomgroup')}}"></td>
            </tr>
            <tr>
                <th>部屋数</th>
                <td><input type="text" name="rooms" value="{{old('rooms')}}"></td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="検索"></td>
            </tr>
        </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection