@extends('layouts.register')

@section('title','Hoteluser.login_check')

@section('menubar')
    @parent
    【ログインチェック】
@endsection

@section('content')
    @foreach ($login_login as $item)
        <tr>
            <td>{{$item->id}}</td>
            {{-- <td>{{$item->roomgroups_id}}</td> --}}
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->tel}}</td>
        </tr>
    @endforeach
@endsection

@section('footer')
    copyright 2021 okeke
@endsection

