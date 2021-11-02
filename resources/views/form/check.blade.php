@extends('layouts.register')

@section('title','登録')

@section('menubar')
    @parent
    【新規登録確認画面】
@endsection

@section('content')
    <p>{{$msg}}</p>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection