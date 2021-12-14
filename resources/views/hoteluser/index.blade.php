@extends('layouts.register')

@section('title','Hoteluser.index')

@section('menubar')
    @parent
    【ログイン成功】<br>
    <p>【{{Session::get('name')}}】様ようこそ</p>
@endsection

@section('content')
    <p>ログインが完了しました</p>
    <a href="/roomsearch">
        部屋検索
    </a>
    <br>
    <a href="/reserve">
        予約確認
    </a>
    
@endsection

@section('footer')
    copyright 2021 okeke
@endsection

{{-- 使ってる --}}