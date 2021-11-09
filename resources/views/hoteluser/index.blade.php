@extends('layouts.register')

@section('title','Hoteluser.index')

@section('menubar')
    @parent
    【ホテル利用者新規登録画面】
@endsection

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>tel</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->tel}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection
