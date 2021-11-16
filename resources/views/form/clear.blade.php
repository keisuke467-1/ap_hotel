@extends('layouts.register')

@section('title','form.clear')

@section('menubar')
    @parent
    【ホテル利用者新規登録完了画面】
@endsection

@section('content')
    <p>登録が完了しました。</p>
    <form action="/roomsearch">
        <input type="submit" value="ログインして予約画面へ">
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection

{{-- 使ってる③ --}}