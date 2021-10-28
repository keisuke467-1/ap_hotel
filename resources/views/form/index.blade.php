@extends('layouts.register')

@section('title','登録')

@section('menubar')
    @parent
    【ホテル利用者新規登録画面】
@endsection

@section('content')
    <p>{{$msg}}</p>
    <form action="/register" method="post">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text" name="name"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
        <tr><th>tel: </th><td><input type="text" name="tel"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection