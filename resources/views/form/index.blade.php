@extends('layouts.register')

@section('title','登録')

@section('menubar')
    @parent
    【ホテル利用者新規登録画面】
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/register" method="post">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            <tr><th>tel: </th><td><input type="text" name="tel" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="チェック"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection