@extends('layouts.register')

@section('title','Hoteluser.add')

@section('menubar')
    @parent
    【ホテル利用者新規登録画面】
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
    <form action="/hoteluser/add" method="post">
        <table>
            @csrf
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>
            <tr>
                <th>address: </th>
                <td><input type="text" name="address" value="{{old('address')}}"></td>
            </tr>
            <tr>
                <th>tel: </th>
                <td><input type="text" name="tel" value="{{old('tel')}}"></td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection
