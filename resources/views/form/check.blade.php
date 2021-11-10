@extends('layouts.register')

@section('title','登録')

@section('menubar')
    @parent
    【新規登録確認画面】
@endsection

@section('content')
    <table>
        <tr><th>名前:</th><td>{{$name}}</td></tr>
        <tr><th>アドレス:</th><td>{{$address}}</td></tr>
        <tr><th>電話番号:</th><td>{{$tel}}</td></tr>
    </table>
    <hr>
    <form action="/hoteluser/create" method="post">
        @csrf
        <h5>{{$msg}}</h5>
        <input type="submit" value="登録">
        <input type="hidden" name="name" value="{{$name}}">
        <input type="hidden" name="address" value="{{$address}}">
        <input type="hidden" name="tel" value="{{$tel}}">
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection