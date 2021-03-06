@extends('layouts.register')

@section('title','Hoteluser.login')

@section('menubar')
    @parent
    【ログインフォーム】
@endsection


@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/hoteluser/login_check" method="post">
        @csrf
        <table>
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>address: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
            <tr><th>tel: </th><td><input type="text" name="tel" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection

