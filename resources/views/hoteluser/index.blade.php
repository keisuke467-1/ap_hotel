@extends('layouts.register')

@section('title','Hoteluser.index')

@section('menubar')
    @parent
    【ログインフォーム】
@endsection

@section('content')
{{-- <form action="ここやで" method="post"> --}}
    @csrf
    <table>
        <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
        <tr><th>tel: </th><td><input type="text" name="tel" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="check"></td></tr>
    </table>
</form>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection

{{-- 使ってる --}}